<? $cat = $_GET[cat];?>

<form action="?pg=../estrutura/filmes/gal-cadastrar_db.php" method="post"  onsubmit="return validate(this);" enctype="multipart/form-data">
<h3>
<p>Cadastro de Filmes</p>
<p>&nbsp;</p>
<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Filme:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"><b><?=$_GET[nome]?>&nbsp;</b></td>
    </tr>
	        <tr valign=middle>
              <td align=right valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cartaz:</strong></td>
              <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto01" type="file" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto para destaque:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto02" type="file" id="foto02" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cena 1:</strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto03" type="file" id="foto03" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Cena 2:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto04" type="file" id="foto04" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cena 3:</strong></td>
	          <td bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><input name="foto05" type="file" id="foto05" size="30" /></td>
    </tr>
	        <tr valign="middle">
              <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Cena 4:</strong></td>
	          <td style="border-bottom:1px solid #cccccc"><input name="foto06" type="file" id="foto06" size="30" /></td>
    </tr>
	        
	<? if($cat == 2 OR $cat == 3){?>
	<? }?>
</table>
<span style="border-bottom:1px solid #cccccc"><b>
<input name="nome" type="text" id="pasta2" value="<?=$_GET[nome]?>" style="visibility:hidden;"  />
</b></span>
<span style="border-bottom:1px solid #cccccc"><b>
<input name="pasta" type="text" id="pasta" value="<?=$_GET[id]?>" style="visibility:hidden;"  />
</b></span>
<table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
        </tr>
  </table>
</form>
