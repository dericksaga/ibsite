<script Language="JavaScript">
function validate(theForm) {
if (theForm.nome.value == "")
{
  alert("Digite o nome do Evento");
  theForm.nome.focus();
  return (false);
}
if (theForm.idcat.value == "")
{
  alert("Selecione a categoria");
  theForm.idcat.focus();
  return (false);
}
if (theForm.pasta.value == "")
{
  alert("Digite o nome da Pasta");
  theForm.pasta.focus();
  return (false);
}
return (true);
}
</script>

<? $cat = $_GET[cat];?>

<form action="?pg=../estrutura/galeria/admin/gal-cadastrar_db.php" method="post"  onsubmit="return validate(this);" enctype="multipart/form-data">
<h3>Cadastro de Obras <span style="border-bottom:1px solid #cccccc">
  <input name="dia" type="hidden" value="<? echo date("d")?>" size="3" maxlength="2" />
</span><span style="border-bottom:1px solid #cccccc">
<input name="mes" type="hidden" value="<? echo date("m")?>" size="3" maxlength="2" />
</span><span style="border-bottom:1px solid #cccccc">
<input name="ano" type="hidden" value="<? echo date("Y")?>" size="6" maxlength="4" />
</span><span style="border-bottom:1px solid #cccccc">
<input name="pasta" value="<? echo str_replace(" ", "", str_replace(".", "", microtime())); ?>" type="hidden" maxlength="255" />
</span></h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 

	      
		  <? if($usernivel == "1") {?>
<? } else {?>
<input name='id_franquia' type='hidden' size=45 value="<? echo $idfranquia?>">
<? }?>

<tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Categoria:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
          <select name="idcat" style="width:300" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
<? $sql = mysql_query("SELECT * FROM galeria_cat order by categoria");

if($cat == ""){
echo "<option>Selecione</option>";
} else {
$sql4 = mysql_query("SELECT * FROM galeria_cat WHERE id='$cat'");
$dados4=mysql_fetch_array($sql4);
echo "<option value=$dados4[id]>$dados4[categoria]</option>";
}
echo "<option>=============</option>";			

while ($dados=mysql_fetch_array($sql)){
 echo "<option value='?pg=../estrutura/galeria/admin/gal-cadastrar.php&cat=$dados[id]'>$dados[categoria]</option>";
}?>
          </select>
			<input name='id_cat' type='hidden' size=45 value="<?=$cat?>">
          </strong></td>
    </tr>

	        <tr>
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Nome:</strong></td>
              <td valign="top" style="border-bottom:1px solid #cccccc">                <p>
                <input name="nome" type="text"  size="45" maxlength="255">
              </p>              </td>
    </tr>
	        <tr valign=middle>
              <td align=right valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Foto 1:</strong></td>
              <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto01" type="file" size="30" /></td>
    </tr>
	        <tr valign=middle>
	          <td align=right valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Comentario 1: </strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="comentario1" type="text" id="comentario1"  size="45" maxlength="255" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 2:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto02" type="file" id="foto02" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Comentario 2: </strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="comentario2" type="text" id="comentario2"  size="45" maxlength="255" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Foto 3:</strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto03" type="file" id="foto03" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Comentario 3: </strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="comentario3" type="text" id="comentario3"  size="45" maxlength="255" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 4:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto04" type="file" id="foto04" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Comentario 4: </strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="comentario4" type="text" id="comentario4"  size="45" maxlength="255" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Foto 5:</strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto05" type="file" id="foto05" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Comentario 5: </strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="comentario5" type="text" id="comentario5"  size="45" maxlength="255" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 6:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto06" type="file" id="foto06" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Comentario 6: </strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="comentario6" type="text" id="comentario6"  size="45" maxlength="255" /></td>
    </tr>
	        
	<? if($cat == 2 OR $cat == 3){?>
	<? }?>
</table>
      <table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
        </tr>
  </table>
</form>
