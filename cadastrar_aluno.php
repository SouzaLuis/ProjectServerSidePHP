<?php

include 'conexao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];

$cadastrar = "INSERT INTO aluno (nome, idade, sexo, cidade)
                         VALUES ('$nome',$idade,'$sexo','$cidade')";

mysqli_query($conexao, $cadastrar);

header('location:exibir_aluno.php');
?>