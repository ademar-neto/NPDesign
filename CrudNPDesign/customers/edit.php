<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Usuário</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-5">
      <label for="rg">Identidade</label>
      <input type="text" class="form-control" name="customer['rg']" value="<?php echo $customer['rg']; ?>">
    </div>
      
    <div class="form-group col-md-4">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="nascimento">Data de Nascimento</label>
      <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="matricula">Matrícula SIAP</label>
      <input type="text" class="form-control" name="customer['siap']" value="<?php echo $customer['siap']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="dc">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>">
    </div>


    <div class="form-group col-md-2">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="celular">Celular</label>
      <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
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