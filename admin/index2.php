<? session_start(); ?><?
$requiredUserLevel = array(1,2);
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

include("config.php");

$sql = mysql_query("SELECT * FROM phpsp_users where user='$login'");
$dados = mysql_fetch_array($sql);
$usernivel = "$dados[userlevel]";
$idfranquia = "$dados[id_franquia]";

include("query_string.php");
?>