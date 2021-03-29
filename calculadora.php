<?php
//Criação de variáveis
$v1 = 9;
$v2 = 5;
$operador = '+';
echo "Os números digitados foram $v1 e $v2.";
echo "</br></br>";
switch($operador)
{
case '+':
    $resultado = $v1+$v2;
    break;
case '-':
    $resultado = $v1-$v2;
    break;
case '*':
    $resultado = $v1*$v2;
    break;
case '/':
    $resultado = $v1/$v2;
    break;
}
echo "O resultado é $resultado.";
?>