<?php

    $inicio = 1;
    $fim = 50;

    for($i = $inicio; $i <= $fim; $i++) {
        $fizz = ($i % 3 == 0 && $i % 5 == 0 ? "FizzBuzz" : ($i % 3 == 0 ? "Fizz" :($i % 5 == 0 ? "Buzz": $i)));
        echo "$fizz".PHP_EOL;
    }

?>