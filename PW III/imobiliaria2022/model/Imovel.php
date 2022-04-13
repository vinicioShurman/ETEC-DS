<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco{

    private $endereco;
    private $nQuartos;
    private $metragem;
    private $nGaragem;

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getNQuartos()
    {
        return $this->nQuartos;
    }

    public function setNQuartos($nQuartos)
    {
        $this->nQuartos = $nQuartos;

    }
    public function getMetragem()
    {
        return $this->metragem;
    }

    public function setMetragem($metragem)
    {
        $this->metragem = $metragem;
    }

    public function getNGaragem()
    {
        return $this->nGaragem;
    }

    public function setNGaragem($nGaragem)
    {
        $this->nGaragem = $nGaragem;
    }

    public function save(){

        $result = false;
        $conexao = new Conexao();

        $sql = "insert into imovel values (null, :endereco, :nQuartos, :metragem, :nGaragem)";
        if($conn = $conexao->getConection()){
            $stmt = $conn->prepare($sql);
            if($stmt->execute(array(':endereco'=> $this->login, 
                                    ':nQuartos'=> $this->nQuartos, 
                                    ':metragem'=> $this->metragem,
                                    ':nGaragem'=> $this->nGaragem 
                                     ))){
                                         $result = $stmt->rowCount();
                                     }
        }
        return $result;
    }

    public function remove($id){

    }

    public function find($id){

    }

    public function count(){

    }

    public function listAll(){
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * FROM imovel";
        $stmt = $conn->prepare($query);
        $result = array();

        if($stmt->execute()) {
            while($rs = $stmt->fetchObject(Imovel::class)) {
                $result [] = $rs;
            }
        } else {
            $result = false;
        }
    }



}

?>