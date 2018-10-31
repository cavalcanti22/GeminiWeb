<form method="POST" class="col-md-6">

  <input type="hidden" name="id" value="<?=$usuario['id']?>">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario['nome']?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?=$usuario['email']?>">
  </div> 

  <div class="form-group">
    <label for="cpf">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div> 

  <div class="form-group">
    <label for="rsenha">Repete Senha</label>
    <input type="password" class="form-control" id="rsenha" name="rsenha">
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>

  <a href="<?=site_url()?>usuarios"> << Retornar</a>
  

</form>

