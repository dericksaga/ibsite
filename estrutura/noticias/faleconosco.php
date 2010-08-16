<SCRIPT language=JavaScript>
function enviardados(){
	if(document.faleconosco.nome.value=="" || document.faleconosco.nome.value.length < 2)
	{
		alert( "Preencha campo NOME corretamente!" );
			document.faleconosco.nome.focus();
				return false;
	}
	if( document.faleconosco.email.value=="" || document.faleconosco.email.value.indexOf('@')==-1 || document.faleconosco.email.value.indexOf('.')==-1 )
	{
		alert( "Preencha campo E-MAIL corretamente!" );
			document.faleconosco.email.focus();
				return false;
	}
	if(document.faleconosco.telefone.value=="" || document.faleconosco.telefone.value.length < 10)
	{
		alert( "Preencha campo TELEFONE com DDD e o número!" );
			document.faleconosco.telefone.focus();
				return false;
	}
	if(document.faleconosco.cidade.value=="" || document.faleconosco.cidade.value.length < 2)
	{
		alert( "Preencha campo CIDADE corretamente!" );
			document.faleconosco.cidade.focus();
				return false;
	}
	if (document.faleconosco.message.value=="")
	{
		alert( "Preencha o campo MENSAGEM!" );
			document.faleconosco.message.focus();
				return false;
	}	
return true;
} </SCRIPT>

<table width="556" cellspacing="0" cellpadding="0">
  <tr>
    <td><form action="faleconosco.php" method="post" name="faleconosco" id="faleconosco" onsubmit="return enviardados();">
        <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="480"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Preencha 
              o formul&aacute;rio abaixo com sua mensagem e clique em enviar.<br>
              Estaremos lhe respondendo o mais r&aacute;pido poss&iacute;vel.<br>
              N&atilde;o hesite em tirar d&uacute;vidas, fazer coment&aacute;rios 
              ou pedidos de ora&ccedil;&atilde;o.</font></td>
          </tr>
        </table>
        <br>
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="78" height="30"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:&nbsp; 
                </font></div></td>
            <td width="322"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input name="nome" type=text id="nome" size=48>
              </font></td>
          </tr>
          <tr> 
            <td height="30"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:&nbsp;</font></div></td>
            <td><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input name=email type=text id="email" size=40>
              </font></td>
          </tr>
          <tr> 
            <td height="30"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Telefone:&nbsp;</font></div></td>
            <td><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input name=telefone type=text id="telefone" size=30>
              </font></td>
          </tr>
          <tr> 
            <td valign="middle"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Cidade:&nbsp;</font></div></td>
            <td height="30"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input name="cidade" type=text id="cidade" size=48>
              </font></td>
          </tr>
          <tr> 
            <td valign="middle"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Estado:&nbsp;</font></div></td>
            <td height="30"><select name="uf" id="uf">
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
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Mensagem</font><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">:&nbsp;</font></div></td>
            <td><div align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                <textarea name=message cols=37 rows=4 id="message"></textarea>
                </font></div></td>
          </tr>
          <tr> 
            <td height="24" colspan="2" valign="top"> <div align="right"><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif">Favor 
                conferir os campos e e-mail e telefone, para que <br>
                possamos entrar em contato o mais breve poss&iacute;vel.</font><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                </font></div></td>
          </tr>
        </table>
        <p align="center"><font color="#006633" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="submit" type=submit value="Enviar">
          </font><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          </font></p>
      </form></td>
  </tr>
</table>