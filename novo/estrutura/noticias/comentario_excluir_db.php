<?
$id = $_GET[id];
$id2 = $_GET[id2];
$sql = mysql_query("DELETE FROM noticias_comentarios WHERE id='$id'");
?>
<center><h4>Comentário excluído com Sucesso!</h4></center>
<meta http-equiv='refresh' content='0;URL=?pg=../noticias/comentarios.php&id=<? echo $id2?>'>

