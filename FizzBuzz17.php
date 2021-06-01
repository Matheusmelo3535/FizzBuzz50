<?php

$inicio = 1;
$fim = 50;
$retorno = [];
$arrayComFizzBuzz = [];

for($i = $inicio; $i <= $fim; $i++) {
    array_push($retorno, $i);
}


for($i = $inicio; $i <= $fim; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        array_push($arrayComFizzBuzz,"FizzBuzz");
    }
    elseif($i % 3 == 0) {
        array_push($arrayComFizzBuzz, "Fizz");
    }
    elseif($i % 5 == 0) {
        array_push($arrayComFizzBuzz, "Buzz");
    }
    else{
        array_push($arrayComFizzBuzz, $i);
    }
}

print_r(array_replace($retorno, $arrayComFizzBuzz));


?>