<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM banners WHERE id='$id'");

$dir="../images/banners/$id/";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<h3>Banner excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/banners/listar.php'>Voltar</a>
