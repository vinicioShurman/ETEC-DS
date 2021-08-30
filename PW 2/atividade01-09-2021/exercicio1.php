<?php
    //Usando Switch, escreva um script em PHP que leia uma variável com o número correspondente ao mês, ou seja, de 1 até 12. O PHP vai devolver o nome, por extenso, do mês que o usuário digitou.

    $mes = 0;

    //Recebendo o valor do mês:
    $mes = 12;

    switch($mes){
        case 1:
            echo "Janeiro";
            break;
            
        case 2:
            echo "Fevereiro";
            break;
            
        case 3:
            echo "Março";
            break;
            
        case 4:
            echo "Abril";
            break;
            
        case 5:
            echo "Maio";
            break;
            
        case 6:
            echo "Junho";
            break;
            
        case 7:
            echo "Julho";
            break;
            
        case 8:
            echo "Agosto";
            break;
            
        case 9:
            echo "Setembro";
            break;
            
        case 10:
            echo "Outubro";
            break;
            
        case 11:
            echo "Novembro";
            break;    
                
        case 12:
            echo "Dezembro";
            break;  
    }
?>