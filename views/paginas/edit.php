<form class="col-md-12" method="POST" enctype="multipart/form-data">

<div class="row">
  <div class="form-group col-md-6">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?=$pagina['nome']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$pagina['titulo']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="subtitulo">Subtítulo</label>
    <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?=$pagina['subtitulo']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem" value="<?=$pagina['imagem']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?=$pagina['email']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$pagina['telefone']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="facebook">Facebook</label>
    <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$pagina['facebook']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="instagram">instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" value="<?=$pagina['instagram']?>">
  </div>

  <div class="form-group col-md-12">
    <label for="texto">Texto</label>
    <textarea type="text" class="form-control" rows="5" id="texto" name="texto">
      <?=$pagina['texto']?>
    </textarea>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-12">
    <button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</div>

</form>
