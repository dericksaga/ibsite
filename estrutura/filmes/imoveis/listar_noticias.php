<img src="images/noticias.jpg" /><br />
<?
$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM noticias_dados order by data desc ";
$palavra = "Notícia(s)";

$total_reg = "$qts_ultimos";

if(!$page){
$page = "1";
}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg);

if(mysql_num_rows($todos)>0){
?> <br> 
<table width="421" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> <table width="100%" align="center" cellpadding="0" cellspacing="0">
        <TR > 
          <TD align="center" style=" background:white; padding:10px;">
<p style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px">Foram encontrados <strong><? echo "<b><font color=#2d386e>$tr</font></b>";?></strong> 
              Registro(s)!<br>
              Exibindo <? echo $palavra?> de <b><font color=#2d386e><? echo $inicio+1?></font></b> 
              a <b><font color=#2d386e> 
              <? if($tp == $page){ echo $tr; } else { echo $inicio+$total_reg;}?>
              </font></b></p>
          </TD>
        </TR>
		<tr><td>&nbsp;</td></tr>
        <? while ($dados=mysql_fetch_array($limite)) {?>
        <TR> 
          <TD align='left' valign="middle" class="noticia" style=" padding-bottom:5px; padding-left:15px; border-bottom:solid 1px white;"> <a href=?pg=noticia&id=<? echo $dados[id]?>&idcat=<? echo $dados[idcat]?>><img src="images/setamenu.gif" border="0" style="padding-bottom:2px;" /> 
            <? $data = explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0] - <strong>$dados[titulo]</strong>";?>
            </a></Td>
        </TR>
        <tr> 
          <td height="3" colspan="2"></td>
        </tr>
        <tr> 
          <td height="1" colspan="2"></td>
        </tr>
        <tr> 
          <td height="3" colspan="2"></td>
        </tr>
        <? }?>
        <tr> 
          <TD> <br /><table border="0" align="center" cellpadding="0" cellspacing="0" >
              <TR> 
                <TD width="100" align="right" valign="top" class="fontemaior"> 
                  <?
if($page > 1){
$anterior = $page -1;
$url = "?pg=$pg&page=$anterior";
echo "<a href='$url'>« Anterior</a>&nbsp;|";
} else {
echo "<font color='$corcelula2'>« Anterior</font>&nbsp;|";
}
?>
                </TD>
                <TD align="center" class="fontemaior"> 
                  <? 
for($x=1; $x<=$tp; $x++){
$url = "?pg=$pg&page=$x";
  if ($x==$page) {
  echo "<b>$x</b>|";
  } else {
  echo "<a href='$url'>$x</a>|";
  }
} 
?>
                </TD>
                <TD width="100" align="left" valign="top" class="fontemaior"> 
                  <?
if($tp > $page){
$proxima = $page +1;
$url = "?pg=$pg&page=$proxima";
echo "&nbsp;<a href='$url'>Próxima »</a>";
} else {
echo "&nbsp;<font color='$corcelula2'>Próxima »</font>";
}
?>
                </TD>
              </TR>
            </table></TD>
        </tr>
      </table>
      <? } else {?>
      <BR> <table align="center" cellpadding="0" cellspacing="0">
        <TR> 
          <TD align="center" valign="bottom"> <br> <br> <br> <br>
            Nenhum(a) <b><? echo $palavra?></b> encontrado(a) em <br>
            nosso banco de dados!<br> <br> <br> </td>
        </tr>
      </table>
      <? } ?>
      <p>&nbsp;</p></td>
  </tr>
</table>
