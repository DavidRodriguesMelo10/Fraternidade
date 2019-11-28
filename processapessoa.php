<?php

include 'db.php';


$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data = $_POST['data_nascimento'];
$dia = (int) substr(($data),0,2);
$mes = (int) substr(($data),3,5);
$ano = (int) substr(($data),6,10);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('Y-m-d',$data_process);
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
$data_cadastro = date('Y-m-d');
$status = $_POST['status'];

$query = "INSERT INTO pessoas values (default, '$nome', '$sexo', '$data_nascimento', '$estado_civil', '$nome_conjuge',
 '$rg', '$cpf', '$email', '$telefone', '$endereco', '$moradia', '$nome_pa', '$rg_pa', '$informacao_adicional', 
 '$data_cadastro', '$status')";

mysqli_query($conexao, $query);

$pegar_linha =  mysqli_query($conexao, "Select * from val_produtos order by id DESC LIMIT 0, 1");
$id = $pegar_linha['id'];
header('location:cadastrodependente.php?id=$id');


