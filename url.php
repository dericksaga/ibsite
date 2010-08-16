<?
$pg= $_GET[pg];
include "config.php";
if(empty($pg)) { $pg= "principal"; }
?>
<html>
<head>
<?
	$id = $_GET[id];
	$dados = mysql_fetch_array(mysql_query("SELECT * FROM banners where id = $id"));
	$cliques = $dados[cliques] + 1;
	$sql = mysql_query("UPDATE banners SET cliques='$cliques' where id=$id");
?>
<meta HTTP-EQUIV="refresh"
  CONTENT="0;URL=<?=$dados[url]?>"> 
</head>
<body marginheight="0" marginwidth="0">
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
  <tr>
    <td><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Aguarde, carregando...</strong></font></td>
  </tr>
</table>
</body>
</html>