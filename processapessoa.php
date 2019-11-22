<?php

include 'db.php';

$foto = $_FILES["foto"];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$nome_conjuge = $_POST['nome_conjuge'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$moradia = $_POST['moradia'];
$nome_pa = $_POST['nome_pa'];
$rg_pa = $_POST['rg_pa'];
$informacao_adicional = $_POST['informacao_adicional'];
$data_cadastro = $_POST['data_cadastro'];
$status = $_POST['status'];



$query = "INSERT INTO pessoas values (default, '$foto', '$nome', '$sexo', '$data_nascimento', 
 '$estado_civil', '$nome_conjuge', '$rg', '$cpf', '$email', '$telefone', '$endereco',
 '$moradia', '$nome_pa', '$rg_pa', '$data_cadastro', '$informacao_adicional',
 '$status')";

mysqli_query($conexao, $query);

header('location:cadastrodependente.php');

