<?
// conex�o com o banco
if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
//echo "server:". $_SERVER['REMOTE_ADDR']. "/ linha 4 no config.php";
	$server = "localhost";
  	$user = "ibrasilt";
  	$senha = "mt670po";
	$banco = "ibrasilt_bd";	
} else {
//echo "server: LOCAL / linha 10 no config.php";
	$server = "localhost";
  	$user = "ibrasilt";
  	$senha = "mt670po";
	$banco = "ibrasilt_bd";	
}

$conexao = mysql_connect("$server", "$user", "$senha"); $db = mysql_select_db("$banco");
// termina conex�o com o banco

$pasta = "estrutura/galeria";
	function cl($var){
	$var = ereg_replace("[����]","A",$var);
	$var = ereg_replace("[����]","a",$var);
	$var = ereg_replace("[���]","E",$var);
	$var = ereg_replace("[���]","e",$var);
	$var = ereg_replace("[���]","i",$var);
	$var = ereg_replace("[���]","I",$var);
	$var = ereg_replace("[����]","O",$var);
	$var = ereg_replace("[�����]","o",$var);
	$var = ereg_replace("[���]","U",$var);
	$var = ereg_replace("[���]","u",$var);
	$var = str_replace("�","C",$var);
	$var = str_replace("�","c",$var);
	$var = str_replace(" ","-",$var);
	return $var;
	}

?>