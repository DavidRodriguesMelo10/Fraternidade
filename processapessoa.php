<?php

include 'db.php';

$foto = $_POST['foto'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
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
$status = $_POST['status'];


$query = "INSERT INTO pessoas values (default, '$foto', '$nome', '$data_nascimento', '$sexo',
 '$estado_civil', '$nome_conjuge', '$rg', '$cpf', '$email', '$telefone', '$endereco',
 '$moradia', '$nome_pa', '$rg_pa', '$informacao_adicional',
 '$status')";





$nome = $_POST['nome'];
$email = $_POST['email'];
$status = $_POST['status'];



$query = "INSERT INTO pessoas (nome, email, status) values ('$nome','$email','$status')";






mysqli_query($conexao, $query);

header('location:cadastrodependente.php');

