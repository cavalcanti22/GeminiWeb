<form class="col-xs-6" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome"     name="nome" value="<?=$imagem['nome']?>" >
  </div>

  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo"   name="titulo" value="<?=$imagem['titulo']?>" >
  </div>

  <div class="form-group">
    <label for="titulo">Link</label>
    <input type="text" class="form-control" id="titulo"   name="link" value="<?=$imagem['link']?>" >
  </div>

  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem"   name="imagem">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</form>