<?php if(!isset($_GET['editar'])){ ?>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="jquery.mask.min.js"></script>
  <script>
            $(document).ready(function(){
                $('#data_titular').mask('00/00/0000');
                $('#data_dependente').mask('00/00/0000');
                $('#rg_titular').mask('00.000.000-0');
                $('#rg_pa').mask('00.000.000-0');
                $('#cpf_titular').mask('000.000.000-00');
                $('#telefone').mask('(00)00000-0000');
            });
        </script>
<h1 class='titulo'>Cadastro de titular.</h1>

<form method="post" action="processapessoa.php">
  <div class="form-group">
    <label class="badge badge-secondary">Foto:</label>
    <input type="text" class="form-control" name="foto" placeholder="Anexar foto">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Sexo:</label>
    <input type="text" class="form-control" name="sexo" placeholder="Digite o seu sexo">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Data de Nascimento:</label>
    <input type="text" class="form-control" name="data_nascimento" placeholder="Digite sua data de nascimento" id="data_titular">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Estado Civil:</label>
    <input type="text" class="form-control" name="estado_civil" placeholder="Digite seu estado civil">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Nome Conjuge:</label>
    <input type="text" class="form-control" name="nome_conjuge" placeholder="Digite o nome do conjuge">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Rg:</label>
    <input type="text" class="form-control" name="rg" placeholder="Digite seu rg" id="rg_titular">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary" >Cpf:</label>
    <input type="text" class="form-control" name="cpf" placeholder="Digite o seu cpf" id="cpf_titular">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary" >Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu Endereco">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary" >Telefone:</label>
    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite o seu telefone">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary" >Endereco:</label>
    <input type="text" class="form-control" name="endereco" placeholder="Digite o seu Endereço">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Moradia:</label>
    <input type="text" class="form-control" name="moradia" placeholder="Digite sua moradia">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Nome Pessoa Altorizada:</label>
    <input type="text" class="form-control" name="nome_pa" placeholder="Pessoa autorizada">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Rg Pessoa Altorizada:</label>
    <input type="text" class="form-control" name="rg_pa" placeholder="Digite seu rg_pa" id="rg_pa">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Informações adicionais:</label>
    <input type="text" class="form-control" name="informacao_adicional" placeholder="Digite informações adicionais">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Status:</label>
    <input type="text" class="form-control" name="status" placeholder="Digite o status">
  </div>
  <div>
    <img src="img/user.png" alt="" width="5%" onclick="chamadependente()" style="position:relative">
    <p style="color:#6C757D; margin: -3.6% 0 3% 6.5%" >Adicionar Dependente</p>
  </div>

  <input type="submit" class="btn btn-primary" value="Cadastrar Titular">
  <br/>

<?php } else {
  while($linha = mysqli_fetch_array($consulta_pessoas)){
    if($linha['idpessoas'] == $_GET['editar']){
?>

<h1 class="titulo">Editar pessoa.</h1>

<form method="post" action="editapessoa.php">
  <input type="hidden" name="idpessoas" value="<?php echo $linha['idpessoas'];?>">
  <div class="form-group">
    <label class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome" value="<?php echo $linha['nome'];?> ">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email" value="<?php echo $linha['email'];?>">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="status" placeholder="Digite o status" value="<?php echo $linha['status'];?> ">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Editar pessoa">
</form>

<?php } } } ?>
<br>
<a class="btn btn-primary" href="?pagina=index.php">Voltar </a>