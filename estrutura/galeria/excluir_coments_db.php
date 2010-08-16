<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM blog_coments WHERE id='$id'");

?>
<h3>Excluído com sucesso!</h3>

<br>
<a href='?pg=../estrutura/imoveis/listar_comentarios.php'>Voltar</a>
