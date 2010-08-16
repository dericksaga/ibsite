<?
$caminho=$_GET[caminho];

if($caminho == ""){?>

<h3><strong>Excluir Fotos da Notícia</strong></h3>


<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
    <td align="center"> 
      <select name="nomedapasta" style="width:280" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
	  <?
$sql = mysql_query("SELECT * FROM noticias_dados where fotos_extras='sim' order by id desc");
$total = mysql_num_rows($sql); 
if($total > 0){ ?>
                <option selected>Selecione uma Notícia</option>
                <option>======================================</option>
<? while ($dados=mysql_fetch_array($sql)) {?>
<option value="?pg=../noticias/listar_fotos.php&caminho=../images/noticias/<? echo $dados[id]?>"><? echo $dados[id]?> - <? echo $dados[titulo]?></option>
<? }?>
</select></form>

<? } else {?>
<table width="400" align="center" cellpadding="0" cellspacing="0">
  <TR> 
    <TD align="center" height="30">Nenhum 
      diretório encontrado!</td>
  </tr>
  </table>
<? }?>

</td>
 </tr>
</table>




<br>
<br>
<? } if($caminho != ""){?>
<script language='javascript'>
function confirmaExclusao(aURL) {
if(confirm('Você tem certeza que deseja excluir?')) {
location.href = aURL;
}
}
</script>

<h3><strong>Excluir Fotos da Not&iacute;cia</strong></h3>

<table width="400" align="center" cellpadding="0" cellspacing="0">
  <TR> 
    <TD height="25" align="center">Total 
      de Fotos: <strong> 
      <? 
if($caminho != ""){
$dir="$caminho";
} else {
$dir="../images/noticias";
}
$dir1=opendir($dir);
$cont=0;
while ($res=readdir($dir1) ){
$tipo=explode(".",$res);
if ($tipo[1]=="jpg" || $tipo[1]=="JPG"){
$cont=$cont+1;
}
}
print ($cont);
?>
      </strong></TD>
  </TR>
</table>

<table width="440" border=0 align="center" cellpadding=0 cellspacing=0> 
    <tr align="center"> 
	<td bgcolor="#C0C0C0"><strong>Foto</strong></td>
    <td width="340" bgcolor="#C0C0C0"><b>Nome da Foto</b></td> 
	    <td width="50" colspan="2" bgcolor="#C0C0C0"><b>A&ccedil;&otilde;es</b></td> 

    </tr> 
  <tr><td height="5" colspan="4"></td></tr>
  <?


$rep = opendir($caminho);
while ($file = readdir($rep)) {
$tipo = filetype("$caminho/$file");
if($file != '..' && $file !='.' && $file !=''){ 
 if (!is_dir($file)){
 
 ?>

  <tr> 
  <td><? echo "<a href='$caminho/$file' target='_blank'><img src='thumbs_produtos_01.php?imagem=$caminho/$file' border='0'></a> ";?></td>
    <td valign="middle">
	<? echo "&nbsp;<a href='$caminho/$file' target='_blank'>$file</a>";?></td>
    <td align="center" valign="middle"><a href="<? if($tipo != "dir"){ echo "javascript:confirmaExclusao('?pg=../noticias/excluir_fotos.php&caminho=$caminho&nomedoarquivo=$file')";
 } else { echo "javascript:confirmaExclusao('?pg=../noticias/excluir_fotos.php&caminho=$caminho&nomedapasta=$file')";}?>"><img src="../images/admin/botao_drop.png" alt="Deletar Produto" border="0"></a></td>
 

  </tr>
  <tr><td height="5" colspan="4"></td></tr>
<tr><td height="1" colspan="4" background="../images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="4"></td></tr>
  <?
 }
}
}
closedir($rep);
?>
</table>
<br>

<? }?>
