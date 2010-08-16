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

if($usernivel == "2"){
$busca = "SELECT * FROM phpsp_users where userlevel='2' order by userlevel";
} else {
$busca = "SELECT * FROM phpsp_users where userlevel='1' OR userlevel='2' order by userlevel";
}

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
<h3>Lista de Administradores </h3> 
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
    <td width="50" bgcolor="#C0C0C0"><b>ID</b></td> 
    <td width="300" bgcolor="#C0C0C0"><b>Usu&aacute;rios</b></td>
	    <td width="40" bgcolor="#C0C0C0"><b>Nível</b></td> 
	    <td width="50" colspan="2" bgcolor="#C0C0C0"><b>A&ccedil;&otilde;es</b></td> 

    </tr> 
<tr><td height="5" colspan="5"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" bgcolor="<? echo $bgcolor; ?>"> 
            <td align="center"> <? echo $dados[primary_key]; ?> </td> 
            <td align="left"> <? echo $dados[nome]; ?> </td> 
            <td> <? echo $dados[userlevel]; ?> </td> 
            <td align="center"><a href="?pg=../estrutura/usuarios/alterar_form.php&id=<? echo $dados[primary_key]; ?>"><img src="../images/admin/botao_edit.png" alt="Alterar Usuário" border="0"></a></td> 
            <td align="center"><a href="javascript:confirmaExclusao('?pg=../estrutura/usuarios/excluir_db.php&id=<? echo $dados[primary_key]; ?>')"><img src="../images/admin/botao_drop.png" alt="Excluir Usuário" border="0"></a></td> 
        </tr> 
        </tr> 

<tr><td height="5" colspan="5"></td></tr>
<tr><td height="1" colspan="5" background="../images/layout/barrinha_divisao_horizontal.gif"></td></tr>
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
?>
</TD>
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
?>
</TD>
          <TD width="100" align="left" valign="top">
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
      Voc&ecirc; n&atilde;o tem nenhum usu&aacute;rio <br>
      cadastrado no banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
