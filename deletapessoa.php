<?php

include 'db.php';

$idpessoas = $_GET['idpesssoas'];


$query = "DELETE FROM pessoas WHERE id = $idpessoas";

mysqli_query($conexao, $query);

header('location:index.php');

