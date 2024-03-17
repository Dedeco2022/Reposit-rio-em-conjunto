<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("conecta.php");

$id = $_POST['id'];
$nome= $_POST['nome'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE produto SET nome = '$nome', 
quantidade = '$quantidade' WHERE id_produto = '$id'";

mysqli_query($conexao,$sql);

echo "<h4>Editado com sucesso!</h4>";
?>
<a href="index.php"> Voltar </a> 
</body>
</html>