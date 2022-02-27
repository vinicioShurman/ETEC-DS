<?php
require_once 'Vinho.php';

$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];
$harvest = $_POST['harvest'];

$wine = new Vinho();

$wine->setName($name);
$wine->setType($type);
$wine->setPrice($price);
$wine->setHarvest($harvest);

echo $wine->mostrarVinho();

if($wine->verificarPreco() == true){
    echo "<br>Produto em oferta!";
} else{
    echo "<br>Produto com preço normal.";
}
?>