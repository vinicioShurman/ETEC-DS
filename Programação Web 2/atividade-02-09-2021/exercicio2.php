<?php
    //01. Crie um vetor e salve 5 nomes de carros. Imprima o nome do carro da posição 3. Salve mais 5 nomes de carros neste mesmo vetor e em seguida imprima o nome do carro da posição 8.

    //02. Crie um vetor e salve o nome de 3 países sendo que a abreviação do nome de cada país deve ser o índice. Em seguida imprima todos os países. Exemplo: BRA - Brasil, EUA - Estados Unidos, ING - Inglaterra.

    // 01.
    $carros = array('Polo', 'Gol', 'Uno', 'Onix', 'Ka');

    echo $carros[3], '<br>';

    array_push($carros, 'Saveiro', 'Ranger', 'Golf', 'Civiv', 'Corolla');

    echo $carros[8], '<br>';

    // 02.
    $paises = array('BRA' => 'Brasil', 'EUA' => 'Estados Unidos da America', 'DE' => 'Alemanha');

    foreach($paises as $sigla => $nome){
        echo "$sigla – $nome <br>";
    }
?>