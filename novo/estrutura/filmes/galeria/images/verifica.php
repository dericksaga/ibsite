<?
// Sistema para verificar se o usuário já está logado ou não
if(!$_COOKIE["usuario"] && !$_COOKIE["senha"]){
header("Location: ../admin/login.php");
}
if($acao == sair){
setcookie("usuario");
setcookie("senha");
header("location: ../admin/login.php");
}
?>