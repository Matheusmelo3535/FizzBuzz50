<?php

class FizzBuzzComConstrutor
{
    public $inicio;
    public $fim;

    public function __construct($inicio, $fim) {
        $this->inicio = $inicio;
        $this->fim = $fim;
    }

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

?>