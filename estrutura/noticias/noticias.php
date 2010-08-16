<?
$sql = mysql_query("SELECT * FROM noticias_dados where destaque='sim' order by id desc LIMIT 1");
$sql2 = mysql_query("SELECT * FROM noticias_dados where destaque='sim' order by id desc LIMIT 1");
$total = mysql_num_rows($sql); 

if ($total==0) { echo "<br><center>Nenhum registro encontrado!</center>";} 
else if ($total>0) { 
$x=0; 
?><br>

<table width="100%" border=0 cellpadding=2 cellspacing=0> 
<?
while ($x<$total) { 
$dados2=mysql_fetch_array($sql2);

// Changing Background color for each alternate row 
if (($x%2)==0) { $bgcolor="#FFFFFF"; } else { $bgcolor="$corcelula2"; } 
?> 

<tr>
<td><? if($dados2[foto01] != "") {
echo "<font size='4'><strong>$dados2[titulo]</strong></font><br>
<a href='?pg=noticia&id=$dados2[id]'><img vspace='2' src='thumbs.php?w=478&imagem=images/noticias/$dados2[id]/$dados2[foto01]' border='$dados2[borda]'>
$dados2[subtitulo]</a>";
} else{
echo "<a href='?pg=noticia&id=$dados2[id]'><strong><font size='4'>$dados2[titulo]</font></strong><BR>$dados2[subtitulo]</a>";
}?>
  <br>
  <br></td> 
</tr> 
<? $x++;
} // end while 
?>
<tr><td height="1" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
</table> 
<? } // end if numberall > 0 ?>