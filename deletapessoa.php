<?php

include 'db.php';

$idpessoas = $_GET['idpessoas'];


$query = "DELETE FROM pessoas WHERE idpessoas = $idpessoas";

mysqli_query($conexao, $query);

header('location:index.php');

