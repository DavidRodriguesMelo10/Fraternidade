<h3 class="titulo">Dependentes</h3><br>
<a href="?pagina=cadastrodependente" class="btn btn-success">Cadastrar um dependente.</a><p></p>
<table class="table table-hover table-striped" id="pessoas">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Numero Cadastro</th>
      <th>Idade</th>
      <th>editar</th>
      <th>deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      while($linha = mysqli_fetch_array($consulta_pessoas)){

    ?>
    <td><a href="?pagina=cadastrodependente&editar=<?php echo $linha['id'];?>"><i class="fas fa-user-edit"></i></a></td>
    <td><a href="deletadependente.php?deletar=<?php echo $linha['id'];?>"><i class="fas fa-user-times"style="color: #ff6b6b;"></i></a></td></tr>
    <?php
      }
    ?>

  </tbody>