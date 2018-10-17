<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Dados de pagamento</h3>
    <hr/>
    <form>
		<div class="row">
		<div class="col form-group">
			<label >Cliente</label>
				<select class="custom-select mr-sm-2" id="">
					<option selected>Escolha o cliente...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>

			<div class="col form-group">
				<label >Descrição do Pagamento</label>
				<input type="text" class="form-control" id="" placeholder="Descreva referente ao pagamento">
			</div>

			<div class="col form-group">
				<label >Valor</label>
				<input type="text" class="form-control" id="" placeholder="Digite o valor R$">
			</div>
		</div>

		<div class="form-group">
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
		<br>

  </form>
  </div>
  <div>

  <script type='text/javascript'>

      function myFunction() {

          var inputTelefone = '<div class="row"><div class="col-md-12 form-group"><input type="text" class="form-control" id="" placeholder="Digite o Telefone"></div></div>';
          var div = document.createElement("div");
          var t = document.createTextNode("");
          div.appendChild(t);
          document.getElementById("novo-telefone").appendChild(div).innerHTML = inputTelefone;
      }

    </script>  

<?php require_once '_script.php'; ?>

</body>
</html>