<?php


$inicio = 1;
$fim = 50;
$retorno = [];


for($i = $inicio; $i <= $fim; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        array_push($retorno,"FizzBuzz");
    }
    elseif($i % 3 == 0) {
        array_push($retorno, "Fizz");
    }
    elseif($i % 5 == 0) {
        array_push($retorno, "Buzz");
    }
    else{
        array_push($retorno, $i);
    }
}

foreach($retorno as $chave => $valor) {
    echo "Indice: $chave - valor: $valor".PHP_EOL;
}

?>