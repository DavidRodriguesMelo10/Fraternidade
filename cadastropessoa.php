<?php if(!isset($_GET['editar'])){ ?>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="jquery.mask.min.js"></script>
  <script type="text/javascript" src="css/style.css"></script>  

<!--Inicio HTML-->
<h1 class='titulo'>Cadastro de titular.</h1>

<form method="post" action="processapessoa.php">
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
    <input type="text" class="form-control" name="data_nascimento" placeholder="Digite sua data de nascimento" id="data_nascimento">
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
    <label class="badge badge-secondary">Rg Pessoa Autorizada:</label>
    <input type="text" class="form-control" name="rg_pa" placeholder="Digite o rg da pessoa autorizada" id="rg_pa">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Informações adicionais:</label>
    <input type="text" class="form-control" name="informacao_adicional" placeholder="Digite informações adicionais" id="informacao_adicional">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Status:</label>
    <input type="text" class="form-control" name="status" placeholder="Digite o status">
  </div>
  <input type="submit" class="btn btn-primary" value="Cadastrar Titular">
  <br/>


<!--Mascaras titular-->

  <script>
    $('#data_nascimento').mask('00/00/0000');
    $('#rg_titular').mask('00.000.000-0');
    $('#rg_pa').mask('00.000.000-0');
    $('#cpf_titular').mask('000.000.000-00');
    $('#telefone').mask('(00)00000-0000');
  </script>

<!--Função PHP-->

<?php } else {
  while($linha = mysqli_fetch_array($consulta_pessoas)){
    if($linha['id'] == $_GET['editar']){
?>

<!--php para datas -->

<?php
$data = $linha['data_nascimento'];
$mes = (int) substr(($data),5,7);
$dia = (int) substr(($data),8,10);
$ano = (int) substr(($data),0,4);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('d/m/Y',$data_process);

$data2 = $linha['data_cadastro'];
$mes2 = (int) substr(($data),5,7);
$dia2 = (int) substr(($data),8,10);
$ano2 = (int) substr(($data),0,4);
$data_process2 = mktime(00,00,00,$mes,$dia,$ano);
$data_cadastro = date('d/m/Y',$data_process);
?>

<!--Editar-->


<h1 class="titulo">Editar pessoa.</h1>

<form method="post" action="editapessoa.php">
  <input type="hidden" name="id_edi" id='id_edi' value="<?php echo $linha['id'];?>">
  <div class="form-group">
    <label class="badge badge-secondary">Nome:</label>
    <input type="text" class="form-control" name="nome_edi" placeholder="" value="<?php echo $linha['nome'];?> " id="nome_edi">
  </div>
  <div class="form-group">
    <label class="badge badge-secondary">Sexo:</label>
    <input type="text" class="form-control" name="sexo_edi" id="sexo_edi" placeholder="" value="<?php echo $linha['sexo'];?> "> 
</div>
<div class="form-group">
  <label class="badge badge-secondary">Data de Nascimento:</label>
  <input type="text" class="form-control" name="data_nasc_edi" id="data_nasc_edi" placeholder="" value="<?php echo $data_nascimento;?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Estado Civil:</label>
  <input type="text" class="form-control" name="civil_edi" id="civil_edi" placeholder="" value="<?php echo $linha['estado_civil'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Nome do Conjuge:</label>
  <input type="text" class="form-control" name="conjuge_edi" id="conjuge_edi" placeholder="" value="<?php echo $linha['nome_conjuge'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Rg:</label>
  <input type="text" class="form-control" name="rg_edi" id="rg_edi" placeholder="" value="<?php echo $linha['rg'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Cpf:</label>
  <input type="text" class="form-control" name="cpf_edi" id="cpf_edi" placeholder="" value="<?php echo $linha['cpf'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Email:</label>
  <input type="email" class="form-control" name="email_edi" id="email_edi" aria-describedby="emailHelp" placeholder="Digite o seu email" value="<?php echo $linha['email'];?>">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Telefone:</label>
  <input type="text" class="form-control" name="telefone_edi" id="telefone_edi" placeholder="" value="<?php echo $linha['telefone'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Endereço:</label>
  <input type="text" class="form-control" name="endereco_edi" id="endereco_edi" placeholder="" value="<?php echo $linha['endereco'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Moradia:</label>
  <input type="text" class="form-control" name="moradia_edi" id="moradia_edi" placeholder="" value="<?php echo $linha['moradia'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Pessoa Autorizada:</label>
  <input type="text" class="form-control" name="pa_edi" id="pa_edi" placeholder="" value="<?php echo $linha['nome_pa'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Rg da Pessoa Autorizada:</label>
  <input type="text" class="form-control" name="rg_pa_edi" id="rg_pa_edi" placeholder="" value="<?php echo $linha['rg_pa'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Informações Adicionais:</label>
  <input type="text" class="form-control" name="info_edi" id="info_edi" placeholder="" value="<?php echo $linha['informacao_adicional'];?> ">
</div>
<div class="form-group">
  <label class="badge badge-secondary">Data do Cadastro:</label>
  <input type="text" class="form-control" name="data_cadas_edi" id="data_cadas_edi" placeholder="Digite o status" value="<?php echo $data_cadastro?> " readonly>
</div>
<div class="form-group">
  <label class="badge badge-secondary">Status:</label>
  <input type="text" class="form-control" name="status_edi" id="status_edi" placeholder="Digite o status" value="<?php echo $linha['status'];?> ">
</div> 
  <br>
  <input type="submit" class="btn btn-primary" value="Editar pessoa">
</form>

<?php } } } ?>
<br>
<a class="btn btn-primary" href="?pagina=index.php">Voltar </a>


<!--Mascara editar-->
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="css/style.css"></script>  
<script>
  $('#data_nasc_edi').mask('00/00/0000');
  $('#rg_edi').mask('00.000.000-0');
  $('#rg_pa_edi').mask('00.000.000-0');
  $('#cpf_edi').mask('000.000.000-00');
  $('#telefone_edi').mask('(00)00000-0000');
</script>