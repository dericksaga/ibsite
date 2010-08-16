<?
// conexão com o banco
if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
//echo "server:". $_SERVER['REMOTE_ADDR']. "/ linha 4 no config.php";
	$server = "localhost";
  $user = "root";
  	$senha = "lala";
	$banco = "ibrasilt_bd";	
} else {
//echo "server: LOCAL / linha 10 no config.php";
	$server = "localhost";
  	$user = "root";
  	$senha = "lala";
	$banco = "ibrasilt_bd";	
}

$conexao = mysql_connect("$server", "$user", "$senha"); $db = mysql_select_db("$banco");
// termina conexão com o banco

$pasta = "estrutura/galeria";
	function cl($var){
	$var = ereg_replace("[ÁÀÂÃ]","A",$var);
	$var = ereg_replace("[áàâãª]","a",$var);
	$var = ereg_replace("[ÉÈÊ]","E",$var);
	$var = ereg_replace("[éèê]","e",$var);
	$var = ereg_replace("[íìî]","i",$var);
	$var = ereg_replace("[ÍÌÎ]","I",$var);
	$var = ereg_replace("[ÓÒÔÕ]","O",$var);
	$var = ereg_replace("[óòôõº]","o",$var);
	$var = ereg_replace("[ÚÙÛ]","U",$var);
	$var = ereg_replace("[úùû]","u",$var);
	$var = str_replace("Ç","C",$var);
	$var = str_replace("ç","c",$var);
	$var = str_replace(" ","-",$var);
	return $var;
	}

?>
