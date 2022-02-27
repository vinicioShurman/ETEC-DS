<?php
require_once 'Operacao.php';

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];
$resultado = 0;

$op1 = new Operacao();

$op1->setValor1($valor1);
$op1->setValor2($valor2);

switch($operacao){
    case "soma":
        $resultado = $op1->somar();
        break;

    case "subtracao":
        $resultado = $op1->subtracao();
        break;

    case "divisao":
        $resultado = $op1->divisao();
        break;

    case "multiplicacao":
        $resultado = $op1->multiplicacao();
        break;

    case "exponenciacao":
        $resultado =  $op1->exponenciacao();
        break;
}
echo $resultado;