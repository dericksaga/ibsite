<?
$nome = $_POST[nome];
$cor = $_POST[cor];
$sql = "INSERT INTO noticias_categorias VALUES ('', '$nome', '$cor')";
$sql = mysql_query($sql);

?>
<h3>Categoria cadastrada com sucesso!</h3>

<a href='?pg=../estrutura/noticias/listar_cat.php'>Voltar</a>