<script language='javascript'>
function confirmaExclusao(aURL) {
if(confirm('Você tem certeza que deseja excluir?')) {
location.href = aURL;
}
}
</script>

<?
$pg=$_GET[pg];
$page=$_GET[page];


$busca = "SELECT * FROM imoveis order by codigo desc";
// termina a função para buscar a categoria

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
<h3>Relação de Imóveis Cadastrados </h3> 
<table width="100%" cellpadding="0" cellspacing="0">
  <TR> 
    <TD align="center">Foram 
      encontrados <strong><? echo "<b><font color=$coronmouse>$tr</font></b>";?></strong> registros!<br>
      <br>
Exibindo registros de <b><font color=<? echo $coronmouse?>><? echo $inicio+1?></font></b> a <b><font color=<? echo $coronmouse?>><? if($tp == $page){ echo $tr; } else { echo $inicio+$total_reg;}?></font></b></TD>
  </TR>

<tr><td height="5" colspan="2"></td></tr>
<tr><td height="1" colspan="2" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="2"></td></tr>
</table>


<table width="550" border=0 align="center" cellpadding=0 cellspacing=0> 
    <tr align="center"> 
    <td width="60" bgcolor="#C0C0C0"><b>C&oacute;d.</b></td> 
    <td width="351" bgcolor="#C0C0C0"><b>Im&oacute;vel</b></td> 
	   <td width="97" bgcolor="#C0C0C0"><b>Situa&ccedil;&atilde;o</b></td>
	   <!-- <td width="90" bgcolor="#C0C0C0"><b>Coment&aacute;rios</b></td>-->
	    <td width="42" bgcolor="#C0C0C0"><div align="center"><b>Editar</b></div></td> 
    </tr> 
<tr><td height="5" colspan="5"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" bgcolor="<? echo $bgcolor; ?>"> 
            <td align="center"> <? echo "BV".$dados[codigo]*7; ?> </td> 
            <td align="left">
			<?		$sql2 = mysql_query("SELECT * FROM fotos where codigo='$dados[codigo]' limit 1");
				    $dados2 = mysql_fetch_array($sql2);
					if(is_file("../images/miniaturas/$dados2[thumb]")) {
					echo "<img src='../images/miniaturas/$dados2[thumb]' align='left'><br>"; }
					$sql2 = mysql_query("SELECT * FROM imoveis_tipos where id='$dados[tipo]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo "<b>";
					echo $dados2[nome];
					echo "</b> no Bairro <b>";
					$sql2 = mysql_query("SELECT * FROM imoveis_bairros where id='$dados[bairro]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo $dados2[nome];
					$sql2 = mysql_query("SELECT * FROM imoveis_cidades where id='$dados[cidade]'");
				    $dados2 = mysql_fetch_array($sql2);
					echo "</b><br>$dados2[nome] - $dados2[uf]";
					echo "<br><u>$dados[valor]</u>";
					
				?>           </td> 
			<td align="center" bgcolor="<? echo $bgcolor; ?>">
				<? if($dados[situacao] == 1){echo "Venda";}else{echo "Aluguel";}	?>		   
            </td>
			<!--
            <td align="center">
			</td>-->
            <td align="center"><a href="?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$dados[codigo]?>"><img src="../images/admin/botao_edit.png" alt="Alterar" border="0"></a><a href="javascript:confirmaExclusao('?pg=../estrutura/imoveis/excluir_db.php&amp;id=<? echo $dados[codigo]; ?>')"><img src="../images/admin/botao_drop.png" alt="Excluir" border="0" /></a></td> 
  </tr> 
        </tr> 

<tr><td height="5" colspan="5"></td></tr>
<tr background="../imagens/layout/barrinha_divisao_horizontal.gif"><td height="1" colspan="5" background="../images/layout/barrinha_divisao_horizontal.gif"></td>
</tr>
<tr><td height="5" colspan="5"></td></tr>
<? }?>

  <tr><TD colspan="5">
  
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
      Nenhuma <b>Coluna</b> 
      cadastrada <br>
      no nosso banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
