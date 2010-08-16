<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM agenda WHERE id='$id'");

$dir="../images/agenda/$id/";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<h3>Agenda excluída com sucesso!</h3>

<br>
<a href='?pg=../estrutura/agenda/listar.php'>Voltar</a>
