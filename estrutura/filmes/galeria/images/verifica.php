<?
// Sistema para verificar se o usu�rio j� est� logado ou n�o
if(!$_COOKIE["usuario"] && !$_COOKIE["senha"]){
header("Location: ../admin/login.php");
}
if($acao == sair){
setcookie("usuario");
setcookie("senha");
header("location: ../admin/login.php");
}
?>