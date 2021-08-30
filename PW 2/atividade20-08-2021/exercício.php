<?php
    $valor1 = 10;
    $valor2 = 5;

    $valor1 += $valor2;

    if($valor1 >= 21) {
        $valor1 += 8;
        echo "O resultado é: ".$valor1;
    } else {
        $valor1 -= 5;
        echo "O resultado é: ".$valor1;
    }
?>