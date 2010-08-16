<?
$var = "estrutura/principal.php";
$pg = "estrutura/$_GET[pg].php";
if(empty($_SERVER["QUERY_STRING"])) {
include($var);
} else {
include("$pg");
}
?>