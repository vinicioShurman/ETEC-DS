<?php
    //Crie um array multidimensional de carros onde o índice será a marca (Vw, GM, Fiat, Ford) e para cada uma dessas marcas/posições adicione 4 veículos. Depois imprima o carro 3 da Vw, o carro 1 da Fiat e o carro 2 da Ford.

    //Percorra o array anterior com foreach para listar todos os valores.

    //Array
    $carros = array(
        array('Vw' => 'Polo', 'GM' => 'Camaro', 'Fiat' => 'Argo', 'Ford' => 'Mustang'),
        array('Vw' => 'Gol', 'GM' => 'Onix', 'Fiat' => 'Mobi', 'Ford' => 'Edge'),
        array('Vw' => 'Jetta', 'GM' => 'Equinox', 'Fiat' => 'Uno', 'Ford' => 'Ka'),
        array('Vw' => 'Fox', 'GM' => 'Cruze', 'Fiat' => 'Cronos', 'Ford' => 'Territory')
    );

    echo $carros[3]['Vw'],"<br>";
    echo $carros[1]['Fiat'],"<br>";
    echo $carros[2]['Ford'];

    echo "<br><br>Listando todos os carros do array:<br><br>";
    foreach($carros as $carro){
        foreach($carro as $marca => $modelo){
            echo "$marca  $modelo<br>";
        }
    }
?>