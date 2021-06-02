<?php
include "FizzBuzzComConstrutor.php";

$obj = new FizzBuzzComConstrutor(1,70);
$resultado = $obj->verificaFizzBuzz($obj->inicio, $obj->fim);
$obj->exibeFizzBuzzConsole($resultado);


?>