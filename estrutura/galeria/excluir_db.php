<?
$id = $_GET[id];

$sql2 = mysql_query("SELECT user1, user2 FROM blog_dados where id = $id");
$dados2=mysql_fetch_array($sql2);
$user1 = $dados2[user1];
$user2 = $dados2[user2];

$sql = mysql_query("DELETE FROM phpsp_users WHERE user='$user1'");
$sql = mysql_query("DELETE FROM phpsp_users WHERE user='$user2'");
$sql = mysql_query("DELETE FROM blog_coments WHERE blog='$id'");

$sql = mysql_query("DELETE FROM blog_dados WHERE id='$id'");

	$sql = mysql_query("SELECT image, thumb FROM blog_fotos WHERE codigo=$id");

	while ($data = mysql_fetch_array($sql)) {

		if(is_file("../images/fotos/$data[image]")) {
		unlink("../images/fotos/$data[image]");
		}
		if(is_file("../images/miniaturas/$data[thumb]")) {
		unlink("../images/miniaturas/$data[thumb]");
		}
	}
		$query = "DELETE FROM blog_fotos WHERE codigo='$id'";
		mysql_query($query);

?>
<h3>Excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar.php'>Voltar</a>