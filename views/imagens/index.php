
</style>
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TITULO</th>
		<th>IMAGEM</th>
		<th>
			<a href="<?=site_url()?>Imagens/add">
				<i  class="mdi mdi-plus mdi-24px"></i>
			</a>
		</th>
	</tr>

	<?php foreach ($imagens as $i): ?>
		<tr>
			<td><?=$i['id']?></td>
			<td><?=$i['nome']?></td>
			<td><?=$i['titulo']?></td>
			<td><?=$i['imagem']?></td>
			<td>
				<a href="<?=site_url()?>Imagens/remove/<?=$i['id']?>" style="color:#E91E63;"><i class="icon-pencil3">Remover</i></a>
				<a href="<?=site_url()?>Imagens/edit/<?=$i['id']?>"><i class="icon-spell-check">Editar</i></a>
			</td>
		</tr>
	<?php endforeach ?>
	
</table>