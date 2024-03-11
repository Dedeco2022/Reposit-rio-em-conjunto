<?php
include("conecta.php");

$sql = "UPDATE lista SET status=".$_GET['status']." WHERE id=".$_GET['id']; 
mysqli_query($conexao,$sql);

if($_GET['status'] == 2){

    echo "<h2> Tarefa definida como resolvida! </h2>";
    echo "<hr>";
    echo "<a href='index.php'> Voltar </a>";

} else {
    
    echo "<h2> Tarefa definida como pendente! </h2>";
    echo "<hr>";
    echo "<a href='index.php'> Voltar </a>";

}