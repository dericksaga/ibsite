<?
$id = $_GET[id];

$sql = mysql_query("SELECT * FROM phpsp_users where primary_key='$id'");
$dados=mysql_fetch_array($sql);
?>
<form action="?pg=../estrutura/usuarios/alterar_db.php" method="post">
<input type=hidden name="id" value="<? echo $id; ?>"> 

<h3>Altera&ccedil;&atilde;o  de Usuário</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 

        <tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>*Nome:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='nome' type='text' id="nome" value="<? echo $dados[nome]?>" size=45>
          </strong></td>
        </tr>
                <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">Fone:</div></td>
                  <td style="border-bottom:1px solid #cccccc">(
                      <INPUT name="ddd1"  value="<? echo $dados[ddd1];?>" size="2" maxlength="2">
      )
      <INPUT name="fone1" value="<? echo $dados[fone1];?>" size="11" maxlength="9"></td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">Celular:</div></td>
                  <td style="border-bottom:1px solid #cccccc">(
                      <INPUT name="ddd2" value="<? echo $dados[ddd2];?>" size="2" maxlength="2">
      )
      <INPUT name="fone2" value="<? echo $dados[fone2];?>" size="11" maxlength="9"></td>
                </tr>

				 <tr>
                  <td style="border-bottom:1px solid #cccccc"><div align="right">E-mail(login p/ vip`s):</div></td>
                  <td style="border-bottom:1px solid #cccccc">
				  <? if($usernivel == "1" OR $usernivel == "2") {?>
                  <INPUT name="email" value="<? echo $dados[email];?>" size="35">
				  <? } else {?>
				  <input type="hidden" name="email" value="<? echo $dados[email]?>">
                  <INPUT disabled name="email" value="<? echo $dados[email];?>" size="35">
				  <? }?>				  </td>
                </tr>
	
        <tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">*Login:</td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <? if($usernivel == "1" OR $usernivel == "2") {?>
            <input name='bu' type='text' value="<? echo $dados[user]?>" disabled size=45>
			<input name='user_login' type="hidden" value="<? echo $dados[user]?>" size=45>
			<? } else {?>
			<input name='user_login' type='text' value="<? echo $dados[user]?>" size=45>
			<? }?></td>
        </tr>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">*Senha:</td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='user_senha' type='password' id="user_senha" value="<? echo "$dados[password]";?>" size=45>
      </strong></td>
    </tr>
<? if($usernivel == "1") {?>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">*Nivel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
	  <input name='usuario_nivel' type='radio' value='1' <? if($dados[userlevel] == "1") { echo "checked";}?>> 
	  Administrador do Sistema<br></td>
    </tr>
	<? } else {?>
	  <input name='usuario_nivel' type='hidden' value='3'><br>
	<? }?>
</table>
    
<table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Alterar'>
              </font></p></td>
        </tr>
  </table>
  
  <? if($usernivel == "1"){ echo "<input name='nivel2' type='hidden' value='$dados[userlevel]'>";}?>
  
</form>



