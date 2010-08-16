<?
$nome=$_POST[nomeField];
$sql = mysql_query("insert into noticias_categorias VALUES ('','$nome')");
?>

<H3>Categoria  cadastrada com Sucesso!</H3> 

<br>
 
<a href="?pg=../estrutura/noticias/categoria_lista.php">Voltar
</a>