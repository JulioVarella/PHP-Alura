<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function allStudents(): array
    {
        $sqlQuery = 'SELECT * FROM students;';
        $stmt = $this->connection->query($sqlQuery);

        return $this->hydrateStudentList($stmt);
    }

    public function studentsBirthAt(\DateTimeInterface $birthDate): array
    {
        $sqlQuery = 'SELECT FROM students WHERE birth_date = ?;';

        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $birthDate->format('Y-m-d'));
        $stmt->execute();

        return $this->hydrateStudentList($stmt);
    }

    private function hydrateStudentList(\PDOStatement $stmt): array
    {
        $studentDataList = $stmt->fetchAll( PDO::FETCH_ASSOC);
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date'])
            );
        }

        return $studentList;
    }

    public function save(Student $student): bool
    {
        if($student->id() === NULL){
            return $this->insert($student);
        }

        return $this->update($student);
    }

    public function insert(Student $student): bool
    {
        $insertQuery = 'INSERT INTO students (name, birth_date) VALUES (?, ?);';
        $stmt = $this->connection->prepare($insertQuery);

        $stmt->bindValue(1, $student->name());
        $stmt->bindValue(2, $student->birthDate()->format('Y-m-d'));
        $success = $stmt->execute();

        if($success){
            $student->defineId($this->connection->lastInsertId());
        }

        return $success;
    }

    public function update(Student $student): bool
    {
        $updateQuery = 'UPDATE students SET name = ?, birth_date = ? WHERE id = ?;';
        $stmt = $this->connection->prepare($updateQuery);

        $stmt->bindValue(1, $student->name());
        $stmt->bindValue(2, $student->birthDate()->format('Y-m-d'));
        $stmt->bindValue(3, $student->id());

        return $stmt->execute();
    }

    public function remove(Student $student): bool
    {
        $removeQuery = 'DELETE FROM students WHERE id = ?;';
        $stmt = $this->connection->prepare($removeQuery);

        $stmt->bindValue(1, $student->id());

        return $stmt->execute();
    }
}