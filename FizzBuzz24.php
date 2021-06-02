<?php
include "FizzBuzzComConstrutor.php";

class FizzBuzzHerenca extends FizzBuzzComConstrutor
{
    
    function __construct($inicio, $fim) {
        parent::__construct($inicio, $fim);
        
    }
}

$objeto = new FizzBuzzHerenca(20,30);
$output = $objeto->verificaFizzBuzz($objeto->inicio, $objeto->fim);
$objeto->exibeFizzBuzzConsole($output);
?>