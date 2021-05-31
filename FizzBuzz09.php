<?php

$i = 1;
$fim = 50;


while(true) {
    if($fim < $i) {
        break;
    }
    if($fim % 3 == 0 && $fim % 5 == 0) {
        echo "FizzBuzz".PHP_EOL;
    }
    elseif($fim % 3 == 0) {
        echo "Fizz".PHP_EOL;
    }
    elseif($fim % 5 == 0) {
        echo "Buzz".PHP_EOL;
    }
    else{
        echo "$fim".PHP_EOL;
    }

    $fim--;
    
}

?>