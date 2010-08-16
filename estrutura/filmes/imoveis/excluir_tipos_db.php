<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM imoveis_tipos WHERE id='$id'");

?>
<h3>Tipo excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar_tipos.php'>Voltar</a>
