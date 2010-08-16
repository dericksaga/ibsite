<?
	$sql3 = mysql_query("SELECT * FROM noticias_categorias order by rand() limit 1");
	$dados3=mysql_fetch_array($sql3);

?>a