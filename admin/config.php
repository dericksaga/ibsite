<?
// conexão com o banco
if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
//echo "server:". $_SERVER['REMOTE_ADDR']. "/ linha 4 no config.php";
	$server = "localhost";
  	$user = "ibrasilt";
  	$senha = "madouienc845";
	$banco = "ibrasilt_bd";
} else {
//echo "server: LOCAL / linha 10 no config.php";
	$server = "localhost";
  	$user = "ibrasilt";
  	$senha = "madouienc845";
	$banco = "ibrasilt_bd";
}

$conexao = mysql_connect("$server", "$user", "$senha"); $db = mysql_select_db("$banco");
// termina conexão com o banco

$pasta = "estrutura/galeria";



?>

<head>

<SCRIPT language="JavaScript1.2">
var URLSite = window.location.href;
var TituloSite = document.title;
function addfav(){
if (document.all) window.external.AddFavorite(URLSite,TituloSite);
}
</SCRIPT>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title><? echo $tsite?></title>