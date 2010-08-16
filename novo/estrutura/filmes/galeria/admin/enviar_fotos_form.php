<script Language="JavaScript">
function validate(theForm) {
if (theForm.pasta.value == "")
{
  alert("Selecione o Evento!");
  theForm.pasta.focus();
  return (false);
}
return (true);
}
</script>
<? $arquivo = "?pg=../estrutura/galeria/admin/enviar_fotos_cod.php";?>

<h3><strong>Enviar Fotos para Evento</strong></h3>



<form action="<?=$arquivo?>" method="post" enctype="multipart/form-data" onsubmit="return validate(this);" >
<fieldset style="width:450;">
<legend><b>Envio de Fotos no formato ZIP</b>&nbsp;</legend>
<br>
<?
$id = $_GET[id];
if(empty($id)){
$sql= mysql_query("SELECT * FROM galeria where destaque='S' order by data desc");
?>
<select name="pasta" style="width:280">
                <option selected>Selecione um Evento</option>
                <option>======================================</option>
<? while ($dados=mysql_fetch_array($sql)){?>
<option value=<? echo "$dados[pasta]";?>><? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0] - $dados[nome]";?></option>
<? }?>
  </select>
<? } else {
$dados=mysql_fetch_array(mysql_query("SELECT * FROM galeria where destaque='S' AND id='$id'"));
?>
<input type="hidden" name="pasta" value="<?=$dados[pasta]?>">
<? }?>
<br>
<br>
<Table align="center" cellpadding="2" cellspacing="0">
          <tr bgcolor="#e5e5e5"> 
          <td width="65" align="right" valign="middle"><strong>Fotos:</strong></td>
          <td valign="middle" bgcolor="#e5e5e5">
		  Arquivo zip com todas as fotos.<br>
<input name='fotos_zip' type='file' size=30>
            </td>
        </tr>
  </table>
    <table width="400" align="center" cellpadding="0" cellspacing="0">
   <tr> 
     <td height="35" colspan="4" align="center"> 
       <INPUT Type="submit" Value="Enviar">
   </td>
   </tr>
</table>
</fieldset>
<input type="hidden" name="acao" value="zip">
</form>

<br>
<br>

<!-- desabilita

<form action="<?=$arquivo?>" method="post" enctype="multipart/form-data" onsubmit="return validate(this);" >
<fieldset style="width:450;">
<legend><b>Envio de Fotos no formato JPG</b> (5 fotos por vez)&nbsp;</legend>
<br>

<select name="pasta" style="width:280">
                <option selected>Selecione um Evento</option>
                <option>======================================</option>
<?
$sql= mysql_query("SELECT * FROM galeria where destaque='S' order by data desc");
while ($dados=mysql_fetch_array($sql)){?>
<option value=<? echo "$dados[pasta]";?>><? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0] - $dados[nome]";?></option>
<? }?>
  </select>
<br>
<br>
  <Table align="center" cellpadding="2" cellspacing="0">
          <tr bgcolor="#e5e5e5"> 
          <td width="65" align="right" valign="middle"><strong>Foto 01:</strong></td>
          <td valign="middle" bgcolor="#e5e5e5"> 
            <strong>
            <input name='foto01' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle"><strong>Foto 02:</strong></td>
          <td valign="middle"> 
            <strong>
            <input name='foto02' type='file' size=30>
</strong></td>
        </tr>          <tr bgcolor="#e5e5e5"> 
          <td align="right" valign="middle"><strong>Foto 03:</strong></td>
          <td valign="middle"> 
            <strong>
            <input name='foto03' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle"><strong>Foto 04:</strong></td>
          <td valign="middle"> 
            <strong>
            <input name='foto04' type='file' size=30>
</strong></td>
        </tr>          <tr bgcolor="#e5e5e5"> 
          <td align="right" valign="middle"><strong>Foto 05:</strong></td>
          <td valign="middle"> 
            <strong>
            <input name='foto05' type='file' size=30>
</strong></td>
        </tr>
  </table>

  <table width="400" align="center" cellpadding="0" cellspacing="0">
   <tr> 
     <td height="35" colspan="4" align="center"> 
       <INPUT Type="submit" Value="Enviar Fotos" name="jpg">
   </td>
   </tr>
</table>


</fieldset>
<input type="hidden" name="acao" value="normal">
</form>
<br>
<br>
-->