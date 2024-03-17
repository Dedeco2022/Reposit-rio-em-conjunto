<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nome = $_POST['nome'];
$quantidade = $_POST['quant'];
include ("conecta.php");

$sql = "INSERT INTO produto(nome, quantidade) VALUES ('$nome', '$quantidade')";
mysqli_query($conexao, $sql);

echo "<h4>Produto cadastrado com sucesso!</h4>";
?>
<a href="index.php"> Voltar </a> 
</body>
</html>
