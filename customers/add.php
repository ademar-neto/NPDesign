<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuário</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="customer['name']">
    </div>

    <div class="form-group col-md-5">
      <label for="rg">Identidade</label>
      <input type="text" class="form-control" name="customer['rg']">
    </div>
      
    <div class="form-group col-md-4">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="customer['cpf']">
    </div>

    <div class="form-group col-md-3">
      <label for="nascimento">Data de Nascimento</label>
      <input type="text" class="form-control" name="customer['birthdate']">
    </div>
      
    <div class="form-group col-md-2">
      <label for="matricula">Matrícula SIAP</label>
      <input type="text" class="form-control" name="customer['siap']">
    </div>
     
    <div class="form-group col-md-2">
      <label for="telefone">Telefone:</label>
      <input type="text" class="form-control" name="customer['phone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" name="customer['mobile']">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>