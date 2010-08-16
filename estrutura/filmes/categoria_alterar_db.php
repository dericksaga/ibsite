<?
$id = $_POST[id];
$nome = $_POST[nome];
$sql = mysql_query("UPDATE filmes_categorias SET id='$id', nome='$nome' WHERE id='$id'");
?>
<h3>Categoria alterada com sucesso!</h3>
<a href="?pg=../estrutura/filmes/listar_cat.php">Voltar
</a>