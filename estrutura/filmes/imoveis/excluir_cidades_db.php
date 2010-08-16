<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM imoveis_cidades WHERE id='$id'");

?>
<h3>Cidade excluída com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar_cidades.php'>Voltar</a>
