<?
$id = $_GET[id];

$sql = mysql_query("SELECT * FROM galeria WHERE id=$id");
$dados = mysql_fetch_array($sql);

$dir = "../images/eventos/$dados[id_franquia]/$dados[pasta]";
//echo "$dir";
$dir1=opendir("$dir");
while ($res=readdir($dir1)){ // inicio de exclusao de todos os arquivos
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}} // fim de exclusao de todos os arquivos
@rmdir ("$dir"); // remove o diretorio

$sql = mysql_query("DELETE FROM galeria where id='$id'");
?>

<h3>Evento excluído com sucesso!</h3>
<br>
<a href='?pg=../estrutura/galeria/admin/listar.php'>Voltar</a>
