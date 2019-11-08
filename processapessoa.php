<?php

include 'db.php';


$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$contato = $_POST['contato'];
$endereço = $_POST['endereço'];
$foto = $_POST['foto'];
$estado_civil = $_POST['estado_civil'];
$nome_conjuge = $_POST['nome_conjuge'];
$moradia = $_POST['moradia'];
$nome_pa = $_POST['nome_pa'];
$rg_pa = $_POST['rg_pa'];
$data_cadastro = $_POST['data_cadastro'];
$informacao_adicional = $_POST['informacao_adicional'];
$status = $_POST['status'];


$query = "INSERT INTO pessoas values (default, '$nome', '$sexo',
 '$rg', '$cpf', '$email', '$data_nascimento', '$contato', '$endereço', '$foto', '$estado_civil',
 '$nome_conjuge', '$moradia', '$nome_pa', '$rg_pa', '$data_cadastro', '$informacao_adicional',
 '$status')";





$nome = $_POST['nome'];
$email = $_POST['email'];
$status = $_POST['status'];



$query = "INSERT INTO pessoas (nome, email, status) values ('$nome','$email','$status')";






mysqli_query($conexao, $query);

header('location:index.php');

