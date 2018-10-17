<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Dados do Projeto</h3>
    <hr/>
    <form>
      <div class="form-group">
	  <label >Status do Projeto</label>
        <div class="custom-control custom-radio">
          <input type="radio" id="" name="" class="custom-control-input">
          <label class="custom-control-label" for="customRadio1">Ativo</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="" name="" class="custom-control-input">
          <label class="custom-control-label" for="customRadio2">Inativo</label>
        </div>
      </div>

      <div class="form-group">
        <label >Nome do Projeto</label>
        <input type="text" class="form-control" id="" placeholder="Digite o Nome">
      </div>

      <div class="form-group">
        <label >Nome do Domínio</label>
        <input type="text" class="form-control" id="" placeholder="Ex: seudominio.com.br">
      </div>

	  <div class="form-group">
	  	<label >Cliente</label>
		<select class="custom-select mr-sm-2" id="">
			<option selected>Escolha o cliente...</option>
			<option value="1">One</option>
			<option value="2">Two</option>
			<option value="3">Three</option>
		</select>
    </div>

      <div class="form-group">
        <label >Dados de Acesso, FTP, Banco de dados</label>
        <textarea type="textarea" rows="4" class="form-control" id="" ></textarea>
      </div>

	  <button type="submit" class="btn btn-primary">Cadastrar</button>
  	</form>
  </div>
  <div>

<?php require_once '_script.php'; ?>

</body>
</html>