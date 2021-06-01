<?php


$keys = [];
$values = [];

for($i = 1; $i <= 50; $i++) {
    array_push($keys, $i);
}

for($i = 1 ; $i <= 50; $i ++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        array_push($values, "FizzBuzz");
    }
    elseif($i % 3 == 0) {
        array_push($values, "Fizz");
    }
    elseif($i % 5 == 0) {
        array_push($values, "Buzz");
    }
    else {
        array_push($values, $i);
    }
}

$novoArray = array_combine($keys, $values);

foreach($novoArray as $chave => $valor) {
    echo "$chave = $valor".PHP_EOL;
}

?>