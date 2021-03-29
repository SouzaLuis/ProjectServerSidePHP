<html>

<head>
<meta charset="utf-8">
</head>

<body style="background-color: aquamarine">
<table style="border: 2px solid #ccc; width: 70%">
<tr>
    <th>Nome</th>
    <th>Idade</th>
    <th>Sexo</th>
    <th>Cidade</th>
</tr>

<?php

include 'conexao.php';

$aluno = "SELECT * FROM aluno";
$consulta_aluno = mysqli_query($conexao, $aluno);

while($linha = mysqli_fetch_array($consulta_aluno))
{
echo '<tr>';
echo '<td>'.$linha['nome'].'</td>';
echo '<td>'.$linha['idade'].'</td>';
echo '<td>'.$linha['sexo'].'</td>';
echo '<td>'.$linha['cidade'].'</td>';
echo '</tr>';
}

?>

</table>
</body>

</html>