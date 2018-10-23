<?php
require_once 'Controllers/ClienteController.php';

$nome_usuario = '';
$email_usuario = '';
$ret = '';

if(isset($_POST['btn_finalizar'])){
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];

    $objcontroller = new ClienteController();
    $objcontroller2 = new ClienteController();
    $ret = $objcontroller->cadastrarUsuario($nome_usuario, $email_usuario);
    $ret = $objcontroller2->cadastrarEndereco($rua, $numero, $cidade);
//         echo '<pre>';
//        var_dump($objcontroller);
//        echo '</pre>';
    
}
?>
<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Dados do Cliente</h3>
    <hr/>
    <form method="POST" action="?">
      <div class="form-group">
        <label >Nome</label>
        <input type="text" class="form-control" id="" name="nome_usuario" placeholder="Digite o Nome">
      </div>

      <div class="form-group">
        <label >Email</label>
        <input type="email" class="form-control" id="" name="email_usuario" placeholder="Digite o e-mail">
      </div>

      <div class="row">
        <div class="col-md-10 form-group">
          <label >Telefone</label>
          <input type="text" class="form-control" id="" placeholder="Digite o Telefone">
        </div>
        <div class="col-md-2 form-group">
          <label >Adicionar</label><br/>
          <button class="btn btn-primary btn-sm"onclick="myFunction()">+ Telefone</button>
        </div>
      </div>

      <div id="novo-telefone"></div>

      <div class="form-group">
        <h4>Endereço</h4>
      </div>

        <div class="row">
          <div class="col-md-7 form-group">
          <label >Rua</label>
          <input type="text" class="form-control" id="" name="rua" placeholder="Digite o endereço">
        </div>
        <div class="col-md-2 form-group">
          <label >Número</label>
          <input type="number" class="form-control" id="" name="numero" placeholder="Ex: 123">
          
        </div>
        <div class="col-md-3 form-group">
          <label >Cidade</label>
          <input type="text" class="form-control" id="" name="cidade" placeholder="Digite a cidade">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="btn_finalizar">Cadastrar</button>

  
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