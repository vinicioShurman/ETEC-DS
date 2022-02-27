<?php

class Vinho{
    private $name;
    private $type;
    private $price;
    private $harvest;

    // SETs
    public function setName($name){
        $this->name = $name;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setHarvest($harvest){
        $this->harvest = $harvest;
    }

    // GETs
    public function getName(){
        return $this->name;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getHarvest(){
        return $this->harvest;
    }

    // Methods
    public function mostrarVinho(){
        return "Nome: " . $this->name . "<br>Tipo: " . $this->type . "<br>Preço: " . $this->price . "<br>Safra: " . $this->harvest;
    }

    public function verificarPreco(){
        if($this->price > 24){
            return false;
        } else{
            return true;
        }
    }
}
?>