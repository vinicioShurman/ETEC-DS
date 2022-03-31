<?php

require_once 'Bebida.php';

class Vinho extends Bebida{

    private $tipo;
    private $safra;
    private $msg;

    // SETs
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setSafra($safra){
        $this->safra = $safra;
    }

    // GETs
    public function getTipo(){
        return $this->tipo;
    }
    public function getSafra(){
        return $this->safra;
    }

    public function mostrarBebida(){
        return "Nome: " . $this->getNome() . "<br>Preço: " . $this->getPreco() .  "<br>Tipo: " . $this->tipo . "<br>Safra: " . $this->safra;
    }

    public function verificarPreco(){
        if($this->getPreco() < 24){
            $this->msg = "<br>Dentro do orçamento";
            return $this->msg;
        } else{
            $this->msg = "<br>Fora do orçamento";
            return $this->msg;
        }
    }
}
?>