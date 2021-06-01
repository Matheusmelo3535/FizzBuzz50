<?php


//COLOCAR ARRAY ASSOCIATIVO FIZZ -> NUMEROS QUE SÃO FIZZ

$inicio = 1;
$fim = 50;
$retorno = [];
$fizzArray = [];
$buzzArray = [];
$fizzBuzzArray = [];
$normal = [];

for($i = $inicio; $i <= $fim; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        array_push($fizzBuzzArray, $i);
    }
    elseif($i % 3 == 0) {
        array_push($fizzArray, $i);
    }
    elseif($i % 5 == 0) {
        array_push($buzzArray, $i);
    }
    else{
        array_push($normal, $i);
    }
}

$retorno = ['FizzBuzz' => $fizzBuzzArray, 'Fizz' => $fizzArray, 'Buzz' => $buzzArray, 'Normal' => $normal];

foreach ($retorno as $key => $array) {
    echo "$key = ";
   foreach($array as $value) {
       echo "$value ";
   }
   echo "\n";
   PHP_EOL;
   
}

?>