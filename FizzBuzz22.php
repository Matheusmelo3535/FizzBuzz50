<?php

class FizzBuzz
{
    public $inicio;
    public $fim;


    public function verificaFizzBuzz($inicio, $fim) {
        $resultado = [];
        for($i = $inicio; $i <= $fim; $i++) {

            if(!($i % 3) && !($i % 5)) {
                array_push($resultado, "FizzBuzz");
            }
            elseif(!($i % 3)) {
                array_push($resultado, "Fizz");
            }
            elseif(!($i % 5)) {
                array_push($resultado, "Buzz");
            }
            else {
                array_push($resultado, $i);
            }
        }
        return $resultado;
    }

    public function exibeFizzBuzzConsole($array) {
        foreach($array as $element) {
            echo "$element\n";
        }
    }
}

$novoObjeto = new FizzBuzz();
$novoObjeto->inicio = 5;
$novoObjeto->fim = 45;
$result = $novoObjeto->verificaFizzBuzz($novoObjeto->inicio, $novoObjeto->fim);

$novoObjeto->exibeFizzBuzzConsole($result);


?>