<?
// conexЦo com o banco
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
// termina conexЦo com o banco

$pasta = "estrutura/galeria";
	function cl($var){
	$var = ereg_replace("[аюбц]","A",$var);
	$var = ereg_replace("[АЮБЦ╙]","a",$var);
	$var = ereg_replace("[ихй]","E",$var);
	$var = ereg_replace("[ИХЙ]","e",$var);
	$var = ereg_replace("[МЛН]","i",$var);
	$var = ereg_replace("[млн]","I",$var);
	$var = ereg_replace("[срту]","O",$var);
	$var = ereg_replace("[СРТУ╨]","o",$var);
	$var = ereg_replace("[зыш]","U",$var);
	$var = ereg_replace("[ЗЫШ]","u",$var);
	$var = str_replace("г","C",$var);
	$var = str_replace("Г","c",$var);
	$var = str_replace(" ","-",$var);
	return $var;
	}

?>