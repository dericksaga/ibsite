<?
$id = $_GET[id];
$dados=mysql_fetch_array(mysql_query("SELECT * FROM filmes_dados where id='$id'"));
unlink("../images/filmes/$id/$dados[cartaz]");
unlink("../images/filmes/$id/$dados[imgdestaque]");
unlink("../images/filmes/$id/$dados[cena1]");
unlink("../images/filmes/$id/$dados[cena2]");
unlink("../images/filmes/$id/$dados[cena3]");
unlink("../images/filmes/$id/$dados[cena4]");

$sql = mysql_query("DELETE FROM filmes_dados where id='$id'");
?>
<h3>Filme excluído com sucesso!</h3> 
<br>
<meta http-equiv="refresh" content="2;URL=?pg=../estrutura/filmes/listar.php">
<a href='?pg=../estrutura/filmes/listar.php'>Voltar</a>
