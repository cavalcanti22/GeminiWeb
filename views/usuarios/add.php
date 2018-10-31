<form method="POST" class="col-md-6">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div> 

  <div class="form-group">
    <label for="cpf">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div> 

  <div class="form-group">
    <label for="rsenha">Repete Senha</label>
    <input type="password" class="form-control" id="rsenha" name="rsenha">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="<?=site_url()?>usuarios"> << Retornar</a>

  <div class="form-group">
<?php

if (isset($_SESSION['feedback']) && $_SESSION['feedback']) {
  echo $_SESSION['feedback'];
}

unset($_SESSION['feedback']);

?>
  </div>
</form>

