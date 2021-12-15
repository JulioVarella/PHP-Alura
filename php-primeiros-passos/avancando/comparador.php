<?php
//diferença entre == e ===

function faltouConta()
{
    echo "Faltou a conta." . PHP_EOL;
}

function faltouArroba()
{
    echo "Faltou @." . PHP_EOL;
}

 function validaEmail($email, $findMe)
 {
    $posicao = strpos($email, $findMe);
    if($posicao === 0 ){
        faltouConta();
    }elseif($posicao === false) {
        faltouArroba();
    }else{
        echo "Tudo ok";
    }

}


$findMe = "@";
$email = "rca";

validaEmail($email, $findMe);