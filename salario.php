<?php

$nome = "Luís Fernando Alves de Souza";
$salario = 1000;
echo "Opções disponíveis:";
echo "</br>";
echo "1- 10% de aumento.";
echo "</br>";
echo "2- 25% de aumento.";
echo "</br>";
echo "3- 33% de aumento.";
echo "</br>";
echo "4- 41% de aumento.";
echo "</br>";
echo "5- 50% de aumento";
echo "</br></br>";
$aumento = 5;
switch($aumento)
{
    case 1:
        {
            echo "Opção escolhida: 10% de aumento.";
            echo "</br>";
            $val = $salario*0.1;
            echo "Aumento: R$ $val";
            $salariofinal = $salario + $val;
            break;
        }
    case 2:
        {
            echo "Opção escolhida: 25% de aumento.";
            echo "</br>";
            $val = $salario*0.25;
            echo "Aumento: R$ $val";
            $salariofinal = $salario + $val;
            break;
        }
    case 3:
        {
            echo "Opção escolhida: 33% de aumento.";
            echo "</br>";
            $val = $salario*0.33;
            echo "Aumento: R$ $val";
            $salariofinal = $salario + $val;
            break;
        }
    case 4:
        {
            echo "Opção escolhida: 41% de aumento.";
            echo "</br>";
            $val = $salario*0.41;
            echo "Aumento: R$ $val";
            $salariofinal = $salario + $val;
            break; 
        }
    case 5:
        {
            echo "Opção escolhida: 50% de aumento.";
            echo "</br>";
            $val = $salario*0.5;
            echo "Aumento: R$ $val";
            $salariofinal = $salario + $val;
            break;
        }
}
echo "</br></br>";        
echo "Salário atual: R$ $salariofinal";

?>