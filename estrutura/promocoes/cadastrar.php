<form action='?pg=../estrutura/promocoes/cadastrar_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Promo&ccedil;&atilde;o</h3>

<table width="480" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='categoria' type='hidden' size=45 value="1">
    <? }?>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Nome da Promo&ccedil;&atilde;o:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <textarea name='titulo' rows=2 cols=34></textarea>
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Pergunta:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <strong> 
        <textarea name='subtitulo' rows=2 cols=34></textarea>
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Resposta:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <textarea name="texto" cols="34" rows="2" id="texto" ></textarea>      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><strong>Texto:</strong></td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><textarea name="fotos_extras" cols="39" rows="5" id="fotos_extras" ></textarea></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Imagem ilustrativa:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='foto01' type='file' size=30>      </td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data de inicio da promo&ccedil;&atilde;o:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='email' type='text' id="email" value="<? echo date("d/m/Y")?>" size="12" />
      </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data final da promo&ccedil;&atilde;o:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td><strong> 
              <input name='data' type='text' value="<? echo date("d/m/Y")?>" size=12>
              </strong></td>
          </tr>
        </table></td>
    </tr>
  </table>
	  
	  
<table>
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
        </tr>
      </table>
</form>
