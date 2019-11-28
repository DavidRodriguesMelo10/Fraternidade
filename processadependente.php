<?php

include 'db.php';

$linha = mysqli_fetch_array($consulta_pessoas);
$num_cadastro = $linha['idpessoas'];
$nome_D = $_POST['nome_D'];
$data_nascimentoD = $_POST['data_nascimentoD'];
$sexo = $_POST['sexo'];
$rg_D = $_POST['rg_D'];
$grau_parentenco = $_POST['grau_parentenco'];
$sapato = $_POST['sapato'];
$roupa = $_POST['roupa'];
$data_nascimentoBB = $_POST['nasc_bb'];
$dificiencia = $_POST['deficiencia'];
$fralda = $_POST['fralda'];


$query = "INSERT INTO dependentes values (default, '$linha', '$num_cadastro', '$data_nascimentoD', '$sexo',
 '$rg_D', '$grau_parentenco', '$sapato', '$roupa', '$data_nascimentoBB', '$dificiencia', '$fralda')";

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



