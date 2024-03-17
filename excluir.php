<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id_produto=$id";

// executa o comando no BD
mysqli_query($conexao,$sql);

echo "<h4> Excluido com sucesso!";
?> 
<a href="index.php"> Voltar </a> 
</body>
</html>
