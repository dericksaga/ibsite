<?
$id=$_POST[id];
$titulo = $_POST[titulo];
$local = $_POST[local];
$endereco = $_POST[endereco];
$outras = $_POST[outras];
$ano = $_POST[ano];
$mes = $_POST[mes];
$dia = $_POST[dia];
$hora = $_POST[hora];
$minuto = $_POST[minuto];

$sql = mysql_query("UPDATE agenda SET titulo='$titulo', local='$local', endereco='$endereco', outras='$outras', data='$ano-$mes-$dia', hora='".$hora.":".$minuto.":00' WHERE id='$id'");
?>

<h3>Agenda Alterada com sucesso!</h3>

<a href='?pg=../estrutura/agenda/listar.php'>Voltar</a>
