<? $nomeform = "cadastro";?>



<form action="?pg=../estrutura/usuarios/cadastrar_db.php" method="post" name="<? echo $nomeform?>" onSubmit="return validate(this);">
<h3>Cadastro de Usuário</h3>
<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
   		
<? if($usernivel == "1") {?>
<tr valign=middle> 
<td align=right style="border-bottom:1px solid #cccccc"><b>T&iacute;tulo:</b></td> 
<td width="320" style="border-bottom:1px solid #cccccc"> 
    <select name="id_franquia">
<? $sql = mysql_query("SELECT * FROM franquias");
while($dados=mysql_fetch_array($sql)){  
echo "<option value=$dados[id]";
if ($dados[id]==100){echo " selected";}
echo ">$dados[cidade]</option>";
}
?>
        </select>    </td> 
</tr>
<? } else {?>
<input name='id_franquia' type='hidden' size=45 value="<? echo $idfranquia?>">
<? }?>
        <tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Nome:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='nome' type='text' id="nome" size=45>
          </strong></td>
        </tr>
                <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">Fone:</div></td>
                  <td style="border-bottom:1px solid #cccccc">(
                      <INPUT name="ddd1" size="2" maxlength="2">
      )
      <INPUT name="fone1" size="11" maxlength="9"></td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">Celular:</div></td>
                  <td style="border-bottom:1px solid #cccccc">(
                      <INPUT name="ddd2" size="2" maxlength="2">
      )
      <INPUT name="fone2" size="11" maxlength="9"></td>
                </tr>

				 <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">E-mail:</div></td>
                  <td style="border-bottom:1px solid #cccccc">
                  <INPUT name="email" size="35">				  </td>
                </tr>
	
        <tr> 
          <td width="140" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Login:</strong></td>
          <td width="320" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"> 
		  <input name='user_login' type='text' size=45></td>
        </tr>
    <tr> 
      <td width="140" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Senha:</strong></td>
          <td width="320" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='user_senha' type='password' size=45>
      </strong></td>
    </tr>
<? if($usernivel == "1") {?>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Nivel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
	  <input name='usuario_nivel' type='radio' value='1' checked="checked"> 
	  Administrador do site </td>
    </tr>
	<? } else {?>
	  <input name='usuario_nivel' type='hidden' value='3'><br>
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