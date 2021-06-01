<?php
$inicio = 1;
$fim = 50;
$retorno = [];


function verifyFizzBuzz($num) {
    if($num % 3 == 0 && $num % 5 == 0) {
        return "FizzBuzz";
    }
    elseif($num % 3 == 0) {
        return "Fizz";
    }
    elseif($num % 5 == 0) {
        return "Buzz";
    }
    else {
        return $num;
    }
}

for($i = $inicio; $i <= $fim; $i++) {
    array_push($retorno, $i);
}

print_r(array_map("verifyFizzBuzz", $retorno));


?>