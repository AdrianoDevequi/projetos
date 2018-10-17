<!doctype html>
<html lang="pt-br">

<?php require_once '_head.php'; ?>
<?php require_once '_navbar.php'; ?>
		
<body>

  <div class="container">
    <h3>Dados do Cliente</h3>
    <hr/>
    <form>
      <div class="form-group">
        <label >Nome</label>
        <input type="text" class="form-control" id="" placeholder="Digite o Nome">
      </div>

      <div class="form-group">
        <label >Email</label>
        <input type="email" class="form-control" id="" placeholder="Digite o e-mail">
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
          <input type="text" class="form-control" id="" placeholder="Digite o endereço">
        </div>
        <div class="col-md-2 form-group">
          <label >Número</label>
          <input type="number" class="form-control" id="" placeholder="Ex: 123">
          
        </div>
        <div class="col-md-3 form-group">
          <label >Cidade</label>
          <input type="text" class="form-control" id="" placeholder="Digite a cidade">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>

  
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