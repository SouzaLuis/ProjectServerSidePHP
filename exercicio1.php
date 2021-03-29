<?php

$peso = "74";
$altura = "1.73";
$imc = ($peso/($altura*$altura));
echo "Seu peso é: $peso kgs.";
echo "</br></br>";
echo "Sua altura é: $altura cms.";
echo "</br></br>";

if($imc<17)
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra muito abaixo do peso!";
}
else if(($imc >= 17)and ($imc <= 18.49))
{
    echo "Seu resultado: $imc." ;
    echo "</br>";
    echo "Você se encontra abaixo do peso!";  
}
else if(($imc >= 18.5) and ($imc <= 24.99))
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra com o peso normal!";  
}
else if(($imc >= 25 ) and ($imc <= 29.99))
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra acima do peso!";  
}
else if(($imc >= 30) and ($imc<= 34.99))
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra com obesidade I.";  
}
else if(($imc >= 35 ) and ($imc <= 39.99))
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra com obesidade II (Severa).";  
}
else
{
    echo "Seu resultado: $imc.";
    echo "</br>";
    echo "Você se encontra com obesidade III (Mórbida).";
}

?>

