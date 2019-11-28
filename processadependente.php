<?php

include 'db.php';
$num_cadastro =  $_POST['id_dependente'];
$nome = $_POST['nome_D'];


$query = "INSERT INTO dependentes values (default, '$num_cadastro', '$nome')";
mysqli_query($conexao, $query);

header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");
?>




