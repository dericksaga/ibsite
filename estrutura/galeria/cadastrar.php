<? $city = $_GET[city]; ?>
<form action='?pg=../estrutura/imoveis/cadastrar_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Inclus&atilde;o de Blog de Aniversariante</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data da Festa:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='data' type='text' id="data" size="12" />
      usar o formato 00/00/0000</strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Hora da Festa:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='hora' type='text' size="20" id="hora" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Nome do&nbsp;<br /> 
      Aniversariante:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='nome' type='text' size="50" id="nome" /></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">E-mail:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='email' type='text' size="50" id="email" /></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">MSN:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='msn' type='text' size=50 id="msn"></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Usu&aacute;rio&nbsp;&nbsp;<br /> 
      aniversariante:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">
        <input name='usuario2' type='text' size="20" id="usuario2" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Senha aniversariante: </td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">
        <input name='senha2' type='password' size="20" id="senha2" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Usu&aacute;rio Convidado: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
      <input name='usuario3' type='text' size="20" id="usuario3" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Senha Convidado: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
      <input name='senha3' type='password' size="20" id="senha3" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 02:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo2' type='text' size="50" id="arealote15" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 03:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo3' type='text' size="50" id="arealote14" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 04:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo4' type='text' size="50" id="arealote13" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 05:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo5' type='text' size="50" id="arealote12" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 06:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo6' type='text' size="50" id="arealote11" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 07:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo7' type='text' size="50" id="arealote10" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 08:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo8' type='text' size="50" id="arealote22" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 09:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo9' type='text' size="50" id="arealote21" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 10:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo10' type='text' size="50" id="arealote20" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 11:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo11' type='text' size="50" id="arealote19" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 12:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo12' type='text' size="50" id="arealote18" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 13:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo13' type='text' size="50" id="arealote17" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 14:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo14' type='text' size="50" id="arealote29" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 15:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo15' type='text' size="50" id="arealote28" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 16:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo16' type='text' size="50" id="arealote27" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 17:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo17' type='text' size="50" id="arealote26" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 18:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo18' type='text' size="50" id="arealote25" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 19:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo19' type='text' size="50" id="arealote24" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Campo 20:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='campo20' type='text' size="50" id="arealote23" /></td>
    </tr>
    <tr>
      <td align="right" valign="top" style="border-bottom:1px solid #cccccc">Texto:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><textarea name="texto" cols="38" rows="4" id="arealote16"></textarea></td>
    </tr>
    <tr>
      <td align="right" valign="top" style="border-bottom:1px solid #cccccc">Lista de presentes:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><textarea name="presentes" cols="38" rows="4" id="presentes"></textarea></td>
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
