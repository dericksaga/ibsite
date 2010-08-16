<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM noticias_dados WHERE id='$id'");
$sql = mysql_query("DELETE FROM noticias_comentarios WHERE id_noticia='$id'");

$dir="../images/noticias/$id/";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<h3>Notícia excluída com sucesso!</h3>

<br>
<a href='?pg=../estrutura/noticias/listar.php'>Voltar</a>
