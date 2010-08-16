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
$busca = "SELECT * FROM galeria WHERE id_franquia='$idfranquia' order by id DESC ";
} else {
$busca = "SELECT * FROM galeria order by id DESC";
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
<h3>Lista de Obras Cadastradas </h3> 
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
    <td width="47" bgcolor="#C0C0C0"><b>ID</b></td> 
    <td width="242" bgcolor="#C0C0C0"><b>Texto/Categoria</b></td>
	    <td width="85" align="center" bgcolor="#C0C0C0"></td>
	    <td colspan="2" bgcolor="#C0C0C0"><b>A&ccedil;&otilde;es</b></td> 

    </tr> 
<tr><td height="5" colspan="6"></td></tr>
<? while ($dados=mysql_fetch_array($limite)) {?>

         <tr align="center" bgcolor="<? echo $bgcolor; ?>"> 
            <td align="center"> <? echo $dados[id]; ?> </td> 
            <td align="left"><a title="<? echo "$dados[nome]";?>" OnMouseOver="window.status='<? echo "$dados[nome]";?>';return true" href="?pg=../estrutura/galeria/admin/gal-alterar-form.php&id=<? echo $dados[id]; ?>"><img src="<? echo "thumbs.php?w=60&h=47&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" align="left" style="border:1px solid #999999;">
			    <b>
			    <? $dados5=mysql_fetch_array(mysql_query("SELECT * FROM galeria_cat WHERE id='$dados[id_cat]'"));
					echo $dados5[categoria];
					?>
			    </b>			    <br>
		    <? $data=explode("-",$dados[data]);echo "<b>$dados[nome]</b>";?>
			<br>
[<?
$dir="../images/eventos/$dados[id_franquia]/$dados[pasta]";

$dir1=opendir($dir);
$cont=0;
while ($res=readdir($dir1) ){
$tipo=explode(".",$res);
if ($tipo[1]=="jpg" || $tipo[1]=="JPG"){
$cont=$cont+1;
}
}
echo "<strong>".($cont)."</strong> Fotos";
?>]</a></td> 
            <td align="center">
			<?
			$busca = mysql_query("SELECT * FROM franquias WHERE id='$dados[id_franquia]'");
			$dados2=mysql_fetch_array($busca);
			
			echo $dados2[cidade]; ?>
			
			</td>
            <td width="32" align="center"><a href="?pg=../estrutura/galeria/admin/gal-alterar-form.php&id=<? echo $dados[id]; ?>"><img src="../images/admin/botao_edit.png" alt="Alterar Evento" border="0"></a></td> 
            <td width="34" align="center"><a href="javascript:confirmaExclusao('?pg=../estrutura/galeria/admin/gal-excluir_db.php&id=<? echo $dados[id]; ?>')"><img src="../images/admin/botao_drop.png" alt="Excluir Evento" border="0"></a></td> 
        </tr> 
        </tr> 

<tr><td height="5" colspan="6"></td></tr>
<tr><td height="1" colspan="6" background="../images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="6"></td></tr>
<? }?>

  <tr><TD colspan="6">
  
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
      Nenhum evento cadastrado no banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
