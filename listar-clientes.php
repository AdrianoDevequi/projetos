<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Listagem de clientes</h3>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Site</th>
			<th scope="col">Pagamento do Mês</th>
			<th scope="col"> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>José</td>
			<td>site.com.br</td>
			<td>OK</td>
			<td><button type="button" class="btn btn-success btn-sm">Cadastrar Pagamento</button></td>
			</tr>
		</tbody>
	</table>
  </form>
  </div>
  <div>

<?php require_once '_script.php'; ?>

</body>
</html>