<?php
include 'header.php';

?>
<form method="post" action="processadependente.php">

    <h1 class='titulo'>Cadastro de dependentes.</h1>
    <div class="form-group">
        <label class="badge badge-secondary">Nome:</label>
        <input type="text" class="form-control" name="nome_D" placeholder="Digite o nome do dependende">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento:</label>
        <input type="text" class="form-control" name="data_nascimentoD" placeholder="Digite a data de nascimento dependente" id="data_dependente">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Sexo:</label>
        <input type="text" class="form-control" name="sexo" placeholder="Digite o seu sexo">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Rg:</label>
        <input type="text" class="form-control" name="rg_D" placeholder="Rg dependente">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Grau de parentesco:</label>
        <input type="text" class="form-control" name="grau_parentenco" placeholder="Digite o grau de parentesco">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho do Sapato:</label>
        <input type="text" class="form-control" name="sapato" placeholder="Digite o numero de calçados">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho da Roupa:</label>
        <input type="text" class="form-control" name="roupa" placeholder="Digite o tamanho da roupa">
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamadata()" id="botaogravida" name="botaogravida">  Estou Gravida
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamadef()" id="botaodef">  Sou Deficiente
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamafralda()" id="botaofralda">  Preciso de fraldas
    </div>

    <script>
        function chamadata() {
        if($("#botaogravida").is(":checked")){
            $('#gravida').css("display","block");
        } else {
            $('#gravida').css("display","none");
        }
        }
        function chamadef() {
        if($("#botaodef").is(":checked")){
            $('#deficiente').css("display","block");
        } else {
            $('#deficiente').css("display","none");
        }
        }
        function chamafralda() {
        if($("#botaofralda").is(":checked")){
            $('#fraldas').css("display","block");
        } else {
            $('#fraldas').css("display","none");
        }
        }
    </script>
    <div style="display:none" id="gravida">
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento da Bebe:</label>
        <input type="text" class="form-control" name="data_nascimentoD" placeholder="Digite a data de nascimento dependente">
    </div>
    </div>
    <div style="display:none" id="deficiente">
    <div class="form-group">
        <label class="badge badge-secondary">Deficiencia:</label>
        <input type="text" class="form-control" name="deficiencia" placeholder="deficiencia" >
    </div>
    </div>
    <div style="display:none" id="fraldas">
    <div class="form-group">
        <label class="badge badge-secondary">Fralda:</label>
        <input type="text" class="form-control" name="fralda" placeholder="fralda">
    </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Dependente" >
    <br/>
    <script>
        function reseta() {
        var txt;
        var r = confirm("Deseja cadastrar outro dependente?");
        if (r == true) {
            <?php
            header('location:cadastrodependente.php');
            ?>
        } else {
            header('location:index.php');
        }
        document.getElementById("demo").innerHTML = txt;
        }
    </script>
</form>
<?php
include 'footer.php';
?>