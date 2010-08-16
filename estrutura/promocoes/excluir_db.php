<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM promocoes_dados WHERE id='$id'");

$dir="../images/promocoes/$id/";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<h3>Promo&ccedil;&atilde;o excluída com sucesso!</h3>

<br>
<a href='?pg=../estrutura/promocoes/listar.php'>Voltar</a>
