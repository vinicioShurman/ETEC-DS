<?php

require_once 'Vinho.php';
require_once 'Suco.php';
require_once 'Refrigerante.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$safra = isset($_POST['safra']);
$tipo = isset($_POST['tipo']);
$sabor = isset($_POST['sabor']);
$retornavel = isset($_POST['retornavel']);

switch ($_POST['submit']) {
    case "vinho":
        $vinho = new Vinho();
        $vinho->setNome($nome);
        $vinho->setPreco($preco);
        $vinho->setTipo($tipo);
        $vinho->setSafra($safra);
        echo $vinho->mostrarBebida();
        echo $vinho->verificarPreco();
        break;
    case "suco":
        $suco = new Suco();
        $suco->setNome($nome);
        $suco->setPreco($preco);
        $suco->setSabor($sabor);
        echo $suco->mostrarBebida();
        echo $suco->verificarPreco();
        break;
    case "refrigerante":
        $refrigerante = new Refrigerante();
        $refrigerante->setNome($nome);
        $refrigerante->setPreco($preco);
        $refrigerante->setRetornavel($retornavel);
        echo $refrigerante->mostrarBebida();
        echo $refrigerante->verificarPreco();
        break;
}
