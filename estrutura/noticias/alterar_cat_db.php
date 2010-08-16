<?
$id=$_POST[id];
$nome=$_POST[nome];
$cidade=$_POST[cor];

$sql = mysql_query("UPDATE noticias_categorias SET nome='$nome', cor='$cor' WHERE id='$id'");
?>

<h3>Categoria Alterada com sucesso!</h3>

<a href='?pg=../estrutura/noticias/listar_cat.php'>Voltar</a>
