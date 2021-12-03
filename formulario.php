<!DOCTYPE html>
<html lang="pt-br">
<head>    
 <meta charset="utf-8">
 <title> formulario de Contatos </title>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<br>
</form method="post" action="valida.php">

<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-12">


    <div class="form-floating mb-3">
  <input type="nome" class="form-control" id="floatingInput" placeholder="name@example.com" name="nome_completo">
  <label for="floatingInput">Nome</label>
    </div>

  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="email">
  <label for="floatingInput">Email</label>
  </div>

  <div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingInput" placeholder="password">
  <label for="floatingInput">Senha</label>
  </div>

  <div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="fone">
  <label for="floatingInput">Telefone</label>
  </div>

<button type="button" class="btn btn-secondary btn-lg" disabled>Enviar</button>

</div>

      <div class="col">

  <div class="form-floating">
<textarea class="form-control" placeholder="leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
<label for="floatingTextarea2">Mensagem</label>
</div class="col-md-12">
</form>

</div>
    </div>


</div>





 <script src="bootstrap/js/bootstrap.bundle.min.js"></script>                               
</body>

</html>