<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Email</th>
			<th scope="col">Senha Encriptada</th>
			<th scope="col">AÇÃO</th>
		</tr>
	</thead>

	<?php foreach ($usuarios as $u): ?>
		<tbody>
			<tr>
				<td><?=$u['id']?></td>
				<td><?=$u['nome']?></td>
				<td><?=$u['email']?></td>
				<td><?=$u['senha']?></td>
				<td>
					<a href="<?=site_url()?>Usuarios/remove/<?=$u['id']?>" style="color:#E91E63;"><i class="icon-pencil3">Remover</i></a>
					<a href="<?=site_url()?>Usuarios/edit/<?=$u['id']?>"><i class="icon-spell-check">Editar</i></a>
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