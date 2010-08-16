<?
$id = $_GET[id];
$sql = mysql_query("DELETE FROM phpsp_users where primary_key='$id'");

?>
<h3>Usuário excluído com sucesso!</h3>
<br>
<? if($usernivel == "1") {?>
<meta http-equiv="refresh" content="2;URL=?pg=../estrutura/usuarios/listar.php">
<a href='?pg=../estrutura/usuarios/listar.php'>Voltar</a>
<? } else {?>
<meta http-equiv="refresh" content="2;URL=?pg=../estrutura/usuarios/listar_users_newsletter.php">
<a href='?pg=../estrutura/usuarios/listar_users_newsletter.php'>Voltar</a>
<? }?>
