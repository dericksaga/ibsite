<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM filmes_categorias WHERE id='$id'");

?>
<h3>Programa excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/filmes/listar_cat.php'>Voltar</a>
