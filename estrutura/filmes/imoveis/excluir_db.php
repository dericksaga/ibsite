<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM imoveis WHERE codigo='$id'");

	$sql = mysql_query("SELECT image, thumb FROM fotos WHERE codigo=$id");

	while ($data = mysql_fetch_array($sql)) {

		if(is_file("../images/fotos/$data[image]")) {
		unlink("../images/fotos/$data[image]");
		}
		if(is_file("../images/miniaturas/$data[thumb]")) {
		unlink("../images/miniaturas/$data[thumb]");
		}
		$query = "DELETE FROM fotos WHERE id='$id'";
		mysql_query($query);
	}

?>
<h3>Imóvel excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar.php'>Voltar</a>
