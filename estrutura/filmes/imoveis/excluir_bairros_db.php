<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM imoveis_bairros WHERE id='$id'");

?>
<h3>Bairro exclu�do com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar_bairros.php'>Voltar</a>
