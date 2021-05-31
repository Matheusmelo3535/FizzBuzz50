<?php

$inicio = 1;
$fim = 50;

for($i = $inicio; $i <= $fim; $i ++) {
    switch(true)
    {
        case ($i % 3 == 0 && $i % 5 == 0) :
            echo "FizzBuzz".PHP_EOL;
            break;

        case $i % 3 == 0 :
            echo "Fizz".PHP_EOL;
            break;

        case $i % 5 == 0 :
            echo "Buzz".PHP_EOL;
            break;

        
        
        default:
            echo $i.PHP_EOL;
    }
}

?>