<?

$pg=$_GET[pg];
$page=$_GET[page];
$iid=$_GET[iid];

if($iid==1){$busca = "SELECT * FROM galeria where id=1";}
else{$busca = "SELECT * FROM galeria order by data desc";}

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
 //  if (($todos%2)==0) { $bgcolor="#FFFFFF"; } else { $bgcolor="#C0C0C0"; } 
?>
<table width="556" cellpadding="0" cellspacing="0">
  <TR> 
    <TD align="center">&nbsp;<br />
      <p>Exibindo galerias de <b><font color=<? echo $coronmouse?>><? echo $inicio+1?></font></b> a <b><font color=<? echo $coronmouse?>>
      <? if($tp == $page){ echo $tr; } else { echo $inicio+$total_reg;}?>
    </font></b></p></TD>
  </TR>

<tr><td height="5" colspan="2"></td></tr>
<tr><td height="1" colspan="2" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="2"></td></tr>
</table>


<table width="400" border=0 align="center" cellpadding=0 cellspacing=0> 
     
<tr><td height="5" colspan="2"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" bgcolor="<? echo $bgcolor; ?>"> 
            <td width="242" align="left"><a title="<? $data=explode("-",$dados[data]);echo "$data[2]/$data[1]/$data[0] - $dados[nome] - $dados[local]";?>" OnMouseOver="window.status='<? $data=explode("-",$dados[data]);echo "$data[2]/$data[1]/$data[0] - $dados[nome] - $dados[local]";?>';return true" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><img src="<? echo "thumbs.php?w=60&h=47&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" align="left" style="border:1px solid #999999;">
			<? $data=explode("-",$dados[data]);echo "<font size='2'><b>$dados[nome]</b></font><br>$data[2]/$data[1]/$data[0] - $dados[local]";?>
			<br>
</a></td> 
        </tr> 
         

<tr><td height="5" colspan="2"></td></tr>
<tr><td height="1" colspan="2" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="2"></td></tr>
<? }?>

  <tr><TD colspan="2">
  
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <TR> 
          <TD width="100" align="right" valign="top">
            <?
if($page > 1){
$anterior = $page -1;
$url = "?pg=$pg&page=$anterior";
echo "<a href='$url'>« Anterior</a>&nbsp;|";
} else {
echo "<font color='$corcelula2'>« Anterior</font>&nbsp;|";
}
?></TD>
    <TD align="center">
      <? 
for($x=1; $x<=$tp; $x++){
$url = "?pg=$pg&page=$x";
  if ($x==$page) {
  echo "<font color='$coronmouse'><b>$x</b></font>|";
  } else {
  echo "<a href='$url'>$x</a>|";
  }
} 
?></TD>
          <TD width="100" align="left" valign="top">
            <?
if($tp > $page){
$proxima = $page +1;
$url = "?pg=$pg&page=$proxima";
echo "&nbsp;<a href='$url'>Próxima »</a>";
} else {
echo "&nbsp;<font color='$corcelula2'>Próxima »</font>";
}
?></TD>
  </TR>
</table>
  
</TD></tr>
</table>
<br>
<br>


<? } else {?>
<BR>
 
<table width="100%" cellpadding="0" cellspacing="0">
  <TR>
    <TD align="center" valign="bottom"> 
      <br>
      <br>
      <br>
      <br>
      Nenhum evento cadastrado no banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
 

