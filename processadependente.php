<?php

include 'db.php';

$nome_D = $_POST['nome_D'];
$data_nascimentoD = $_POST['data_nascimentoD'];
$sexo = $_POST['sexo'];
$rg_D = $_POST['rg_D'];
$grau_parentenco = $_POST['grau_parentenco'];
$sapato = $_POST['sapato'];
$roupa = $_POST['roupa'];


$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$moradia = $_POST['moradia'];
$nome_pa = $_POST['nome_pa'];
$rg_pa = $_POST['rg_pa'];
$informacao_adicional = $_POST['informacao_adicional'];
$status = $_POST['status'];


$query = "INSERT INTO dependente values (default, '$foto', '$nome_D', '$data_nascimentoD', '$sexo',
 '$rg_D', '$grau_parentenco', '$sapato', '$roupa', '$email', '$telefone', '$endereco',
 '$moradia', '$nome_pa', '$rg_pa', '$informacao_adicional',
 '$status')";

mysqli_query($conexao, $query);
?>
<script>
var r = confirm("Deseja cadastrar outro dependente?");
if (r == true) {
    <?php
    header('location:cadastrodependente.php');
    ?>
} else {
    <?php
    header('location:index.php');
    ?>
}
</script>



