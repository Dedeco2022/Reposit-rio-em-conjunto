<?php
include("conecta.php");

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produto (nome, quantidade) VALUES ('$produto','$quantidade')";
mysqli_query($conexao,$sql);

echo "<h2> Produto cadastrado! </h2>";
echo "<hr>";
echo "<a href='formcad.php'> Voltar </a>";