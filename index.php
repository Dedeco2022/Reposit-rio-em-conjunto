<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>

<h1> Lista de Produtos </h1>
<hr>
<h3> <a href="form-cadastro.php"> Cadastrar Produto </a> </h3>
<hr>
<?php
// Conectar ao BD
include("conecta.php");

// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM produto";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

//Lista as tarefas
echo '<table border=1>
<tr>
<th>ID</th>
<th>Nomes</th>
<th>Quantidade</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';   
echo '<td>'.$dados['id_produto'].'</td>';
echo '<td>'.$dados['nome'] .'</td>';
echo '<td>'.$dados['quantidade'] .'</td>';
echo '<td> <a href="excluir.php?id='.$dados['id_produto'].'"> Excluir</a> </td>';
echo '<td> <a href="form-editar.php?id='.$dados['id_produto'].'"> Editar</a> </td>';
}
?>
    
</body>
</html>