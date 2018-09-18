<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Imagem</th>
			<th scope="col"></th>
		</tr>
	</thead>

	<?php foreach ($paginas as $p): ?>
		<tbody>
			<tr>
				<td><?=$p['id']?></td>
				<td><?=$p['nome']?></td>
				<td><?=$p['imagem']?></td>
				<td>
					<a href="<?=site_url()?>Paginas/edit/<?=$p['id']?>"><i class="icon-spell-check">Editar</i></a>
				</td>
			</tr>
		</tbody>
	<?php endforeach ?>

</table>
<?php

if (isset($_SESSION['feedback']) && $_SESSION['feedback']) {
	echo $_SESSION['feedback'];
}

unset($_SESSION['feedback']);

?>