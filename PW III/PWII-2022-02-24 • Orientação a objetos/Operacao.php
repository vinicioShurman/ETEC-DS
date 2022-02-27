<?php

class Operacao{
    private $valor1; // $this->valor1
    private $valor2;

    // SET & GET. Toda classe privada precisa ter um "set" e um "get" para que consigamos mudar os valores das variáveis privadas
    public function setValor1($valor1){ // Esta variável $valor1 vem da $op1->setValue1(1); da pagina Teste.php
        $this->valor1 = $valor1; // Esta variável $valor1 é a mesma que a de cima. $this->valor1 é o valor1 desta classe
    }
    public function setValor2($valor2){
        $this->valor2 = $valor2;
    }
    public function getValor1(){
        return $this->valor1;
    }
    public function getValor2(){
        return $this->valor2;
    }

    // Métodos. Fazem alguma função com os dados armazenados nesta classe
    public function somar(){
        return $this->valor1 + $this->valor2;
    }
    public function subtracao(){
        return $this->valor1 - $this->valor2;
    }
    public function divisao(){
        return $this->valor1 / $this->valor2;
    }
    public function multiplicacao(){
        return $this->valor1 * $this->valor2;
    }
    public function exponenciacao(){
        return pow($this->valor1, $this->valor2);
    }
}
?>