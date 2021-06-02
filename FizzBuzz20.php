

<?php
// usar php -S localhost:8000

if(isset($_POST)) {
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    
    for($i = $inicio; $i <= $fim; $i++) {
        if(!($i % 3) && !($i % 5)) {
            echo "FizzBuzz"."<br>";
        }
        elseif(!($i % 3)) {
            echo "Fizz"."<br>";
        }
        elseif(!($i % 5)) {
            echo "Buzz"."<br>";
        }
        else {
            echo $i. "<br>";
        }
    }
}


?>