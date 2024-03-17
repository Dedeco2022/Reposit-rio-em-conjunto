<?php
$id = $_GET['id'];
include("conecta.php");
$sql = "SELECT * FROM produto WHERE id_produto=$id";
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1> Editar Produto</h1>
    <form action="editar.php" method="POST">
        Informe o id do produto:
        <input type="text" value="<?php echo $dados['id_produto'];?>" name="id"/> <br>
        Nome do Produto:
        <input type="text" value="<?php echo $dados['nome'];?>" name="nome"/> <br>
        Quantidade:
        <input type="text" value="<?php echo $dados['quantidade'];?>" name="quantidade"/> <br> <br>
        <input type="submit" value="Editar"/>
    </form> 
</body>
</html>