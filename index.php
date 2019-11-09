<?php

include 'db.php';
include 'header.php';



if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'pessoas.php';
}

if($pagina == 'cadastropessoa'){
    include 'cadastropessoa.php';
}
else{
    include 'pessoas.php';
}

include 'footer.php';