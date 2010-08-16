<?
$var = "../estrutura/principal_admin.php";
$pg = "$_GET[pg]";
if(empty($_SERVER["QUERY_STRING"])) {
//include($var);
} else {
include("$pg");
}
?>	