<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM fotos_galerias WHERE id='$id'");

?>
<h3>Galeria Exclu&iacute;da com sucesso!</h3>

<br>
<a href='?pg=../estrutura/galeria/listar_tipos.php'>Voltar</a>
