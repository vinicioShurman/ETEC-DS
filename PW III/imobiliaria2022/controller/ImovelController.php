<?php
require_once '../model/Imovel.php';

class ImovelController{
    public static function salvar(){
        $imovel = new Imovel();
        $imovel->setLogin($_POST['login']);
        $imovel->setSenha($_POST['senha1']);
        $imovel->setPermissao($_POST['permissao']);

        $imovel->save();
    }

    public static function listar(){
        $imoveis = new Imovel;
        return $imoveis->listAll();
    }
}
?>