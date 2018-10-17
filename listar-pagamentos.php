<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Histórico de Pagamentos</h3>
    <br/>

    <table class="table">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Data do pagamento</th>
			<th scope="col">Descrição</th>
			<th scope="col">Valor</th>
			<th scope="col">Site</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>13/12/1995</td>
			<td>Desenvolvimento do site</td>
			<td>R$ 100,00</td>
			<td>site.com.br</td>
			</tr>

		</tbody>
	</table>
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