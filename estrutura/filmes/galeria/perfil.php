<body style="background-color:transparent">
<?
include("../../conexao.php");

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);
?>
<b><font size="4">&nbsp;P E R F I L</font></b>
<hr size="1" noshade color="#000000">
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF" style="filter: Alpha(Opacity=65);"><? echo nl2br($dados[perfil]);?></td>
 </tr>
</table>
