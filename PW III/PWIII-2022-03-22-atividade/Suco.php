<?php 

require_once 'Bebida.php';

class Suco extends Bebida{

    private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    public function getSabor(){
        return $this->sabor;
    }

    public function mostrarBebida(){
        return "Nome: " . $this->getNome() . "<br>Preço: " . $this->getPreco() . "<br>Sabor: " . $this->sabor;
    }

    public function verificarPreco(){
        if($this->getPreco() < 2.5){
            $this->msg = "<br>Dentro do orçamento";
            return $this->msg;
        } else{
            $this->msg = "<br>Fora do orçamento";
            return $this->msg;
        }
    }
}
?>