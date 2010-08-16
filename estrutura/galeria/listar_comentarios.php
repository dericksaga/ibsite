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


$busca = "SELECT * FROM blog_coments order by data desc";
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
<h3>Lista de Comentários (todos) </h3> 
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


<table width="440" border=0 align="center" cellpadding=0 cellspacing=0> 
    <tr align="center"> 
    <td width="56" bgcolor="#C0C0C0"><b>Blog</b></td> 
    <td width="240" bgcolor="#C0C0C0"><b>Coment&aacute;rio</b></td> 
	   <!-- <td width="90" bgcolor="#C0C0C0"><b>Coment&aacute;rios</b></td>-->
	    <td bgcolor="#C0C0C0"><b>A&ccedil;&otilde;es</b></td> 
    </tr> 
<tr><td height="5" colspan="4"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" bgcolor="<? echo $bgcolor; ?>"> 
            <td align="center" style="padding:10px;">
			<?
				$sql3 = mysql_query("SELECT * FROM blog_dados where id = $dados[blog]");
				$dados3=mysql_fetch_array($sql3);
				echo $dados3[nome];
			?>
            </td> 
            <td align="left">	Nome: <b><?=$dados[nome] ?></b>
								<br>
								Data: <b><? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]";?></b>
                                <br />
                                E-mail: <b><?=$dados[email] ?></b>
                                <br />
                                Comentário:<br /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$dados[comentario] ?></b>
			<!--
            <td align="center">
			</td>-->
           <td width="40" align="center"><a href="javascript:confirmaExclusao('?pg=../estrutura/imoveis/excluir_coments_db.php&id=<? echo $dados[id]; ?>')"><img src="../images/admin/botao_drop.png" alt="Excluir" border="0"></a></td>
        </tr> 
        </tr> 

<tr><td height="5" colspan="4"></td></tr>
<tr background="../imagens/layout/barrinha_divisao_horizontal.gif"><td height="1" colspan="4" background="../images/layout/barrinha_divisao_horizontal.gif"></td>
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
