<?
$pg=$_GET[pg];
$page=$_GET[page];

if ($_GET[buscador] == "active"){
	$complemento = "&buscador=active&busca=".$_POST[busca]."".$_GET[busca];
} else { $complemento = "";}

if ($_GET[ordem] == ""){$ordem2 = "codigo desc";}
if ($_GET[ordem] == "aluguel" ){$ordem2 = "situacao asc";}
if ($_GET[ordem] == "venda" ){$ordem2 = "situacao desc";}
if ($_GET[ordem] == "valor" ){$ordem2 = "valor asc";}

$ordem= "order by $ordem2";
$busca = "SELECT * FROM imoveis $ordem";
if ($_GET[buscador] == "active"){
	$busca = "SELECT * FROM produtos WHERE nome LIKE CONVERT( _utf8 '%".$_POST[busca]."".$_GET[busca]."%' USING latin1 ) $ordem"; }

$total_reg = "$qts_ultimos";

if(!$page){$page = "1";}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg);

if(mysql_num_rows($todos)>0){
 //  if (($todos%2)==0) { $bgcolor="#FFFFFF"; } else { $bgcolor="#FFFFFF"; } 
?>
<br><br>
<table width="100%" border="0" cellspacing="5" cellpadding="0" style="border:1px solid #9b9b9b;" class="texto">
  <tr>
    <td width="40%" rowspan="2"><img src="images/filtrar.jpg" align="middle" />Ordenar por:</td>
    <td width="20%"><div align="center" class="marrom"><a href="?pg=imoveis&amp;ordem=aluguel<?=$complemento?>">&raquo; Aluguel</a></div></td>
    <td width="20%"><div align="center" class="marrom"><a href="?pg=imoveis&amp;ordem=venda<?=$complemento?>">&raquo; Venda</a></div></td>
    <td width="20%"><div align="center" class="marrom"><a href="?pg=imoveis&amp;ordem=valor<?=$complemento?>">&raquo; Valor</a></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><span class="marrom"><a href="?pg=busca"><u>Busca Avan&ccedil;ada</u></a></span></div></td>
  </tr>
</table>
<br>
<table width="100%" cellpadding="0" cellspacing="0" class="texto">
  <TR> 
    <TD align="center">Foram 
      encontrados <strong><? echo "<b><font color=$coronmouse>$tr</font></b>";?></strong> registros!<br>
Exibindo registros de <b><font color=<? echo $coronmouse?>><? echo $inicio+1?></font></b> a <b><font color=<? echo $coronmouse?>><? if($tp == $page){ echo $tr; } else { echo $inicio+$total_reg;}?></font></b></TD>
  </TR>
</table>
<br>
<table width="421" border=0 align="center" cellpadding=0 cellspacing=0> 
  <tr align="center">
    <td width="70" bgcolor="#FFFFFF" style="padding-top:2px; padding-bottom:2px;"><b class="texto">/C&oacute;digo/<br />Situa&ccedil;&atilde;o</b></td> 
    <td width="281" bgcolor="#FFFFFF"><b class="texto">Im&oacute;vel</b></td> 
	   <td width="70" bgcolor="#FFFFFF">&nbsp;</td>
  </tr> 
<tr><td height="5" colspan="4"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" onMouseOver="this.style.background='#FAFAFA';" onMouseOut="this.style.background='';"> 
            <td align="center" class="textao"><font class="texto"><? echo "/BV".$dados[codigo]*7; ?>/</font><br /><b>
            	<? if($dados[situacao] == 1){echo "Venda";}else{echo "Aluguel";}	?></b>
            </td> 
            <td align="left" class="textao" style="color:black;">
			<?		$sql2 = mysql_query("SELECT * FROM fotos where codigo='$dados[codigo]' limit 1");
				    $dados2 = mysql_fetch_array($sql2);
					if(is_file("images/miniaturas/$dados2[thumb]")) {
					echo "<img src='images/miniaturas/$dados2[thumb]' align='left' style='padding-right:3px;'>"; }
					$sql2 = mysql_query("SELECT * FROM imoveis_tipos where id='$dados[tipo]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo "<b>";
					echo $dados2[nome];
					echo "</b><br><font class='texto' style='color:black'>Bairro <b>";
					$sql2 = mysql_query("SELECT * FROM imoveis_bairros where id='$dados[bairro]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo $dados2[nome];
					$sql2 = mysql_query("SELECT * FROM imoveis_cidades where id='$dados[cidade]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo "</b><br>$dados2[nome] - $dados2[uf]";
					echo "<br><b></font>R$ ";
					echo number_format($dados[valor],2,",",".");
					echo "</b>";
					
				?> 
            </td> 
			<td align="center" bgcolor="<? echo $bgcolor; ?>" class="texto">
				<a href="?pg=imovel&id=<?=$dados[codigo] ?>"><img src="images/detalhes.gif" align="right" border="0" /></a>
			</td>
  </tr> 
        </tr> 

<tr><td height="5" colspan="4"></td></tr>
<tr background="imagens/layout/barrinha_divisao_horizontal.gif"><td height="1" colspan="4" background="images/layout/barrinha_divisao_horizontal.gif"></td>
</tr>
<tr><td height="5" colspan="4"></td></tr>
<? }?>

  <tr><TD colspan="4">
  
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
    <TD align="center" valign="bottom" class="azul"> 
      <br>
      <br>
      <br>
      <br>
      Nenhum <b>Im&oacute;vel</b> 
      cadastrado <br>
      com esses requisitos.<br><br />
      <a href="?pg=imoveis"><u>Ver todos os im&oacute;veis.</u></a>
      <br>
      <br>
      <br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
