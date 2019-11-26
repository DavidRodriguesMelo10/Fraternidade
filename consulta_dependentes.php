<?php


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'fraternidade';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$linha = mysqli_fetch_array($consulta_pessoas);
$consulta_dependentes = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE num_cadastro='.$linha[idpessoas].'");