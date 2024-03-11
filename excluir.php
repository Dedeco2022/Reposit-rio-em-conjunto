<?php

// Conectar ao BD
include("conecta.php");

// Receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id=$id";

// executa o comando no BD
mysqli_query($conexao,$sql);

echo "<h2> Produto excluído com sucesso! </h2>";
echo "<hr>";
echo "<a href='index.php'> Voltar </a>";