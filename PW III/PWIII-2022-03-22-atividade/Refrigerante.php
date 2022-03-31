<?php

require_once 'Bebida.php';

Class Refrigerante extends Bebida{

    private $retornavel;

    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }
    public function getRetornavel(){
        return $this->retornavel;
    }

    public function mostrarBebida(){
        return "Nome: " . $this->getNome() . "<br>Preço: " . $this->getPreco() . "<br>Retornavel: " . $this->retornavel;
    }

    public function verificarPreco(){
        if($this->getPreco() < 5){
            $this->msg = "<br>Dentro do orçamento";
            return $this->msg;
        } else{
            $this->msg = "<br>Fora do orçamento";
            return $this->msg;
        }
    }
}

?>