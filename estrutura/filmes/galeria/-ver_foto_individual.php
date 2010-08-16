<?
$id = $_GET[id];
$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados=mysql_fetch_array($sql);
$caminho=$_GET[caminho];
$nome=$_GET[nome];
$data=$_GET[data];
$local=$_GET[local];

if(empty($caminho)){?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
    <td align="center"> 
      <select name="nomedapasta" style="width:280" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
<? if($usernivel == "1") {
$sql = mysql_query("SELECT * FROM galeria order by data desc");
} else {
$sql = mysql_query("SELECT * FROM galeria WHERE id_franquia='$idfranquia' order by data desc");
}
$total = mysql_num_rows($sql); 
if($total > 0){ ?>
                <option selected>Selecione a Galeria</option>
                <option>======================================</option>
<? while ($dados=mysql_fetch_array($sql)) {?>
<option value="?pg=../estrutura/galeria/admin/listar_fotos.php&caminho=../images/eventos/<? echo $dados[id_franquia]?>/<? echo $dados[pasta]?>"><? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]";?> - <? echo $dados[nome]?></option>
<? }?>
</select></form>

<? } else {?>
<table width="400" align="center" cellpadding="0" cellspacing="0">
  <TR> 
    <TD align="center" height="30">Nenhuma galeria encontrada!</td>
  </tr>
  </table>
<? }?>

</td>
 </tr>
</table>




<br>
<br>
<? } if($caminho != ""){?>
<br /><br /><br />
<? 
$data=explode("-",$data);
echo "<table width='553px' cellpadding='0' cellspacing='0'>
  <tr>
    <td bgcolor='#CC6600'><div align='center'><font color='#FFFFFF' size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>GALERIA DE FOTOS: $nome</strong></font></div></td>
  </tr>
  <td bgcolor='#FFFFFF'><div align='center'><font color='#CC6600' size='2' face='Verdana, Arial, Helvetica, sans-serif'>$data[2]/$data[1]/$data[0] - $local<br /></font></div></td>
</table>";
?>
<table width="440" border=0 align="center" cellpadding=0 cellspacing=0> 
     
  <tr><td width="50" height="5" colspan="2"></td></tr>
  <?


$rep = opendir($caminho);
while ($file = readdir($rep)) {
$tipo=explode(".",$file);
if ($tipo[1]=="jpg" || $tipo[1]=="JPG"){
$tipo = filetype("$caminho/$file");
if($file != '..' && $file !='.' && $file !=''){ 
 if (!is_dir($file)){
 
 ?>

  <tr> 
  <td><? echo "<a href='$caminho/$file' target='_blank'><img style='border:1px solid #cccccc;' src='thumbs.php?w=180&h=130&imagem=$caminho/$file' border='0'></a>";?></td>
  </tr>
  <tr><td height="5" colspan="2"></td></tr>
<tr><td height="1" colspan="2" background="../images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="5" colspan="2"></td></tr>
  <?
  }
  
 }
}
}
closedir($rep);
?>
</table>
<br>

<? }?>
 

