<?php if(!isset($_GET['editar'])){ ?>

<h1 class='titulo'>Cadastro de pessoas.</h1>

<form method="post" action="processapessoa.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">foto:</label>
    <input type="text" class="form-control" name="foto" placeholder="Anexar foto">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">data_nascimento:</label>
    <input type="text" class="form-control" name="data_nascimento" placeholder="Digite sua data de nascimento">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">estado_civil:</label>
    <input type="text" class="form-control" name="estado_civil" placeholder="Digite seu estado civil">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">nome_conjuge:</label>
    <input type="text" class="form-control" name="nome_conjuge" placeholder="Digite o nome do conjuge">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">rg:</label>
    <input type="text" class="form-control" name="rg" placeholder="Digite seu rg">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary" >cpf:</label>
    <input type="text" class="form-control" name="cpf" id="exampleInputEmail1" placeholder="Digite o seu cpf">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary" >Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu Endereco">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary" >telefone:</label>
    <input type="text" class="form-control" name="telefone" id="exampleInputEmail1" placeholder="Digite o seu telefone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary" >Endereco:</label>
    <input type="text" class="form-control" name="endereco" id="exampleInputEmail1" placeholder="Digite o seu email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">moradia:</label>
    <input type="text" class="form-control" name="moradia" placeholder="Digite sua moradia">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">nome_pa:</label>
    <input type="text" class="form-control" name="nome_pa" placeholder="Pessoa autorizada">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">rg_pa:</label>
    <input type="text" class="form-control" name="rg_pa" placeholder="Digite seu rg_pa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">informa_add:</label>
    <input type="text" class="form-control" name="informa_add" placeholder="Digite informaçoes adicionais">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Status:</label>
    <input type="text" class="form-control" name="status" placeholder="Digite o status">
  </div>






  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Numero do cadastro:</label>
    <input type="text" class="form-control" name="grau_parentenco" placeholder="Digite o grau de parentesco">
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">grau_parentenco:</label>
    <input type="text" class="form-control" name="grau_parentenco" placeholder="Digite o grau de parentesco">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">nome_D:</label>
    <input type="text" class="form-control" name="nome_D" placeholder="Digite o nome do dependende">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">diferencias:</label>
    <input type="text" class="form-control" name="diferencias" placeholder="diferencias">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">data_nascimentoD:</label>
    <input type="text" class="form-control" name="data_nascimentoD" placeholder="Digite a data de nascimento dependente">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">rg_D:</label>
    <input type="text" class="form-control" name="rg_D" placeholder="Rg dependente">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">fralda:</label>
    <input type="text" class="form-control" name="fralda" placeholder="fralda">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">data_nascimentoBB:</label>
    <input type="text" class="form-control" name="data_nascimentoBB" placeholder="data de nascimento do Bebe">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Cadastrar pessoa">
</form>

<?php } else {
  while($linha = mysqli_fetch_array($consulta_pessoas)){
    if($linha['idpessoas'] == $_GET['editar']){
?>

<h1 class="titulo">Editar pessoa.</h1>

<form method="post" action="editapessoa.php">
  <input type="hidden" name="idpessoas" value="<?php echo $linha['idpessoas'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome" value="<?php echo $linha['nome'];?> ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email" value="<?php echo $linha['email'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="status" placeholder="Digite o status" value="<?php echo $linha['status'];?> ">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Editar pessoa">
</form>

<?php } } } ?>
<br>
<a class="btn btn-primary" href="?pagina=index.php">Voltar </a>