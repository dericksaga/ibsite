<?
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$user_login = $_POST["user_login"];
$user_senha = $_POST["user_senha"];
$user_nivel = $_POST["usuario_nivel"];

//UPDATE `phpsp_users` SET `nome` = 'teste',`email` = 'teste',`user` = 'teste',`password` = MD5( 'teste' ) ,`userlevel` = '2' WHERE `primary_key` ='59'

$sql = mysql_query("UPDATE phpsp_users SET nome='$nome', email='$email', user='$user_login', password=MD5('$user_senha'), userlevel='$user_nivel' WHERE primary_key='$id'");
?>
<h3>Usu&aacute;rio Alterado com sucesso!</h3>
<br>
<? if($user_nivel == "1") {?>
<meta http-equiv="refresh" content="2;URL=?pg=../estrutura/usuarios/listar.php">
<a href='?pg=../estrutura/usuarios/listar.php'>Voltar</a>
<? } else {?>
<meta http-equiv="refresh" content="2;URL=?pg=../estrutura/usuarios/listar_users_newsletter.php">
<a href='?pg=../estrutura/usuarios/listar_users_newsletter.php'>Voltar</a>
<? }?>