<!--Função PHP-->

<?php
  while($linha = mysqli_fetch_array($consulta_dependentes)){
    if($linha['id'] == $_GET['editar']){
?>

<!--Editar-->

<h1 class="titulo">Dados dependente</h1>
<form method="post" action="atualizadependente.php">
    <input type="hidden" name="id_edi" id='id_edi' value="<?php echo $linha['id'];?>">
    <div class="form-group">
        <label class="badge badge-secondary">Numero do cadastro:</label>
        <input type="text" class="form-control" name="num_cadastro" id="num_cadastro" placeholder="Digite o status" value="<?php echo $linha['num_cadastro'];?> " readonly>
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Nome:</label>
        <input type="text" class="form-control" name="nome_edi" placeholder="" value="<?php echo $linha['nome_dependente'];?> " id="nome_edi">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar pessoa">
</form>
<?php } } ?>