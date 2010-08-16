<?
$titulo = $_POST[titulo];
$local = $_POST[local];
$endereco = $_POST[endereco];
$outras = $_POST[outras];
$ano = $_POST[ano];
$mes = $_POST[mes];
$dia = $_POST[dia];
$hora = $_POST[hora];
$minuto = $_POST[minuto];

$sql = "INSERT INTO agenda VALUES ('' ,  '$titulo',  '$ano-$mes-$dia',  '".$hora.":".$minuto.":00',  '$local',  '$endereco',  '$outras')";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();
?>
<h3>Agenda cadastrada com sucesso!</h3>
<br>
<a href='?pg=../estrutura/agenda/listar.php'>Voltar</a>