<? $cat = $_GET[cat];?>
<form action='?pg=../estrutura/imoveis/cadastrarcidades_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Cidades</h3>

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
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cidade:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='nome' type='text' style="width:290px;" id="nome" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">UF: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="uf" id="uf">
        <option value="Acre">Acre</option>
        <option value="Alagoas">Alagoas</option>
        <option value="Amap&aacute;">Amap&aacute;</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Bahia">Bahia</option>
        <option value="Cear&aacute;">Cear&aacute;</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Esp&iacute;rito Santo">Esp&iacute;rito Santo</option>
        <option value="Goi&aacute;s">Goi&aacute;s</option>
        <option value="Maranh&atilde;o">Maranh&atilde;o</option>
        <option value="Mato Grosso">Mato Grosso</option>
        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
        <option value="Minas Gerais" selected="selected">Minas Gerais</option>
        <option value="Par&aacute;">Par&aacute;</option>
        <option value="Para&iacute;ba">Para&iacute;ba</option>
        <option value="Pernambuco">Pernambuco</option>
        <option value="Piau&iacute;">Piau&iacute;</option>
        <option value="Paran&aacute;">Paran&aacute;</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
        <option value="Rond&ocirc;nia">Rond&ocirc;nia</option>
        <option value="Roraima">Roraima</option>
        <option value="Santa Catarina">Santa Catarina</option>
        <option value="Sergipe">Sergipe</option>
        <option value="S&atilde;o Paulo">S&atilde;o Paulo</option>
        <option value="Tocantins">Tocantins</option>
      </select></td>
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
