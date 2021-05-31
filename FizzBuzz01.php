<?php

$inicio = 1;
$fim = 50;

for($i = $inicio; $i <= $fim; $i++){
    if($i % 3 == 0){
        if($i % 5 == 0){
            echo "FizzBuzz".PHP_EOL;
        }
        else{
            echo "Fizz".PHP_EOL;
        }
    }
    elseif($i % 5 == 0){
        if ($i % 3 == 0){
            echo "FizzBuzz".PHP_EOL;
        }
        else{
            echo "Buzz".PHP_EOL;
        }
    }
    else{
        echo "$i".PHP_EOL;
    }
    
}
?>