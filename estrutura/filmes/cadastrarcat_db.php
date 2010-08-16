<?
$nome = $_POST[nome];
$sql = "INSERT INTO filmes_categorias VALUES ('', '$nome')";
$sql = mysql_query($sql);

?>
<h3>Programa cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/filmes/listar_cat.php'>Voltar</a>