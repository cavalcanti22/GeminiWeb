<?php
class Imagem extends Model
{

	public function insert_imagem($i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "INSERT INTO imagens (nome,titulo,link,imagem) VALUES ('$nome','$titulo','$link','$imagem')";
		return $this->execute($q);
	}


	public function get_all_imagens()
	{
		$q = "SELECT * FROM imagens";
		return $this->execute($q);
	}


	public function get_imagem($id)
	{
		$q = "SELECT * FROM imagens WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}
	public function update_imagem($id, $i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "UPDATE imagens
			  SET
			  	nome = '$nome',
			  	titulo = '$titulo',
			  	link = '$link',
			  	imagem = '$imagem'
			  WHERE
			  	id = '$id'
			 ";
			 
		return $this->execute($q);		
	}
	public function delete_imagem($id)
	{
		$q = "DELETE FROM imagens WHERE id = '$id'";
		return $this->execute($q);
	}


}
?>