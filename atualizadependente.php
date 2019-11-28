<?php
include 'db.php';

$id = $_POST['id_edi'];
$num_cadastro = $_POST['num_cadastro'];
$nome = $_POST['nome_edi'];

$query = "UPDATE dependentes SET num_cadastro = $num_cadastro, nome_dependente = '$nome' WHERE id = '$id'";

mysqli_query($conexao, $query);
header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");
