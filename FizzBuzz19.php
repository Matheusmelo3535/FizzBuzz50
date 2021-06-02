<?php

$inicio = 1;
$fim = 50;



for($i = $inicio; $i <= $fim; $i++) {
    if(!($i % 3) &&  !($i % 5)) {
        echo "FizzBuzz".PHP_EOL;
    }
    elseif(!($i % 3)) {
        echo "Fizz".PHP_EOL;
    }
    elseif(!($i % 5)) {
        echo "Buzz".PHP_EOL;
    }
    else {
        echo "$i".PHP_EOL;
    }
}

?>