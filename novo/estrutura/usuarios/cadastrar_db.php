<?
$id_franquia = $_POST[id_franquia];
$nome = $_POST[nome];
$ddd1 = $_POST[ddd1];
$fone1 = $_POST[fone1];
$ddd2 = $_POST[ddd2];
$fone2 = $_POST[fone2];
$email = $_POST[email];
$user_login = $_POST[user_login];
$user_senha = $_POST[user_senha];
$usuario_nivel = $_POST[usuario_nivel];

$senha = md5($user_senha); //caso nivel seja 1, criptografa a senha pelo md5()

$sql = mysql_query("SELECT * FROM phpsp_users where userlevel='$usuario_nivel' AND email='$email'");
$dados=mysql_fetch_array($sql);

$sql = "INSERT INTO phpsp_users VALUES ('', '$id_franquia', '$nome', '', '', '', '', '', '', '', '', '', '', '$ddd1', '$fone1', '$ddd2', '$fone2', '$email', '', '', '$user_login', '$senha', '$usuario_nivel')";
$sql2 = mysql_query($sql);
//echo $sql;
?>
<h3>Cadastro Realizado com Sucesso!</h3>
<? 
if($usuario_nivel == 1){$url = "?pg=../estrutura/usuarios/listar.php";}
if($usuario_nivel == 2){$url = "?pg=../estrutura/usuarios/listar.php";}
?>
<meta http-equiv="refresh" content="2;URL=<?=$url?>">
<br>
<a href='<?=$url?>'>Voltar</a>

