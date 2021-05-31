<?php

    $inicio = mt_rand(1, 50);
    $fim = mt_rand(51, 100);

    for($i = $inicio; $i <= $fim; $i ++) {
        if($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz".PHP_EOL;
        }
        elseif($i % 3 == 0){
            echo "Fizz".PHP_EOL;
        }
        elseif($i % 5 == 0){
            echo "Buzz".PHP_EOL;
        }
        else{
            echo "$i".PHP_EOL;
        }
    }


?>


