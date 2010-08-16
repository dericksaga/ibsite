<?
if(empty($_SERVER["QUERY_STRING"])) {
$requiredUserLevel = array(1,2);
$cfgProgDir = '../admin/phpSecurePages/';
include($cfgProgDir . "secure.php");
echo "<a href='../admin/logout.php'><font size=2>Sair</font></a>";
}

include("../config.php");
?>
