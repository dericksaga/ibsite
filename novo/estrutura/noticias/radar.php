<?
include("path2.php");
$sql = mysql_query("SELECT * FROM noticias where id_cat='2' order by id desc LIMIT 10");
$sql2 = mysql_query("SELECT * FROM noticias where id_cat='2' order by id desc");

?>
<table width='100%' border='0' cellpadding='2' cellspacing='0' bgcolor="#e9e9e9">
<tr>
    <td bgcolor="<? echo $corcelula1?>"><b><font color="#FFFFFF">Radar Alto Vale</font></b></td>
</tr>

  <? while ($dados2=mysql_fetch_array($sql2)) {?>
  <tr>
    <td bgcolor="<? echo $corcelula2?>">
	<?
	$sql3 = mysql_query("SELECT * FROM noticias_cidades where id='$dados2[id_cid]'");
	while($dados3=mysql_fetch_array($sql3)){
	echo "<em>$dados3[cidade]</em>";
	}
	?></td>
  </tr>
  <TR valign="top"> 
    <TD>
      <? if($dados2[foto01] != "") {
echo "<div align='$dados2[alinhamento_foto]'><img src='images/noticias/$dados2[foto01]' border='1' align='$dados2[alinhamento_foto]'><strong>$dados2[titulo]</strong><BR><a href='?pg=04&id=$dados2[id]'>$dados2[subtitulo]</a></div>";
} else{
echo "<strong>$dados2[titulo]</strong><BR><a href='?pg=04&id=$dados2[id]'>$dados2[subtitulo]</a>";
}?>

</TD>
  </TR>
<? }?>
</table>
