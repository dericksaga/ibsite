<? $cat = $_GET[cat];?>
<form action='?pg=../estrutura/galeria/cadastrartipos_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Galerias</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='categoria' type='hidden' size=45 value="1">
    <? }?>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Galeria:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='nome' type='text' style="width:290px;" id="nome" />
      </strong></td>
    </tr>
  </table>
	  
	  
<p>&nbsp;</p>
<table align="center">
<tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
        </tr>
      </table>
</form>
