<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM noticias_categorias WHERE id='$id'");

?>
<h3>Categoria exclu�da com sucesso!</h3>

<br>
<a href='?pg=../estrutura/noticias/listar_cat.php'>Voltar</a>
