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


$query = "UPDATE pessoas SET nome='$nome', sexo='$sexo', rg='$rg', cpf='$cpf', 
email='$email', data_nascimento='$data_nascimento', contato='$contato', endereço='$endereço', 
foto='$foto', estado_civil='$estado_civil', nome_conjuge='$nome_conjuge', moradia='$moradia', 
nome_pa='$nome_pa', rg_pa='$rg_pa', data_cadastro='$data_cadastro', informação_adicional='$informacao_adicional', 
status='$status' WHERE idpessoas= $idpessoas";


/*$nome = $_POST['nome'];
$email = $_POST['email'];
$status = $_POST['status'];
$idpessoas = $_POST['idpessoas'];

$query = "UPDATE pessoas SET nome='$nome', email='$email', status='$status' WHERE idpessoas= '$idpessoas'";*/




mysqli_query($conexao, $query);


header('location:index.php');

