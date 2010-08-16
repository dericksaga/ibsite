<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM conteudo_multilingue WHERE id='$id'");


$dir="../images/conteudo/$id/";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<h3>Conteúdo excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/conteudo/listar.php'>Voltar</a>
