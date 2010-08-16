<? $cat = $_GET[cat];?>
<form action='?pg=../estrutura/imoveis/cadastrarbairros_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Bairros</h3>

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
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc">
        <select name="cidade" style="width:290px" id="cidade">
                <?
        $sql = mysql_query("SELECT * FROM imoveis_cidades order by nome");
        while ($dados=mysql_fetch_array($sql)){?>
                <option value="<? echo "$dados[id]";?>"><? echo "$dados[nome] - $dados[uf]";?></option>
                <? }?>
        </select>
      </select></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Bairro: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
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
