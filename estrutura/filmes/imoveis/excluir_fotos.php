<?
$caminho = $_GET[caminho];
$nomedoarquivo = $_GET[nomedoarquivo];

$url = "$caminho/$nomedoarquivo";
unlink("$url");
//echo $caminho;
?>
<meta http-equiv="refresh" content="0;URL=?pg=../noticias/listar_fotos.php&caminho=<? echo $caminho?>">
<center>
<h3>

O arquivo foi excluído com sucesso! </h3>
