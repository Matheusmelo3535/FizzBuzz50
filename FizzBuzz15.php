<?php
$inicio = 1;
$fim = 50;
$retorno = [];

for($i = $inicio; $i <= $fim; $i++) {
    array_push($retorno, $i);
}

print_r(array_map(function ($element) {
    if($element % 3 == 0 && $element % 5 == 0) {
        return "FizzBuzz";
    }
    elseif($element % 3 == 0) {
        return "Fizz";
    }
    elseif($element % 5 == 0) {
        return "Buzz";
    }
    else {
        return $element;
    }
}, $retorno));





?>