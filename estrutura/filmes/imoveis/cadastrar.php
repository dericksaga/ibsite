<? $city = $_GET[city]; ?>
<form action='?pg=../estrutura/imoveis/cadastrar_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Im&oacute;veis</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cidade:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc">          <select name="city" style="width:290px;" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)" id="city">
      <option></option>
<? $sql = mysql_query("SELECT * FROM imoveis_cidades order by nome");
while ($dados=mysql_fetch_array($sql)){
 echo "<option value='?pg=../estrutura/imoveis/cadastrar.php&city=$dados[id]' ";
 if ($city == $dados[id]){echo "selected = 'selected'";}
 echo ">$dados[nome] - $dados[uf]</option>";
}?>
          </select><input type="hidden" value="<?=$city?>" name="cidade" id="cidade"  /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Bairro:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="bairro" style="width:290px" id="bairro">
<? 
if($city <> ""){
$sql = mysql_query("SELECT * FROM imoveis_bairros where cidade = $city order by nome");
while ($dados=mysql_fetch_array($sql)){
?>
          <option value="<?=$dados[id] ?>" ><?=$dados[nome] ?></option>
<? }} ?>
      </select></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tipo de Im&oacute;vel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="tipo" style="width:290px" id="tipo">
          <?
$sql= mysql_query("SELECT * FROM imoveis_tipos order by nome");
while ($dados=mysql_fetch_array($sql)){?>
          <option value="<? echo "$dados[id]";?>"><? echo "$dados[nome]";?></option>
          <? }?>
      </select></td>
    </tr>
    
    <tr> 
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Im&oacute;vel para: 
          <label>
          <input name="situacao" type="radio" id="radio" value="1" checked="checked" />
          </label>
      Venda 
      <label>
      <input type="radio" name="situacao" id="radio2" value="0" />
      </label> 
      Aluguel</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Destaque do topo?
          <label>
              <input name="destaqueprincipal" type="radio" id="radio5" value="1" />
              </label>
        Sim
        <label>
          <input name="destaqueprincipal" type="radio" id="radio6" value="0" checked="checked"  />
          </label>
        N&atilde;o</div></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Texto para o destaque do topo:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='textodestaque' type='text' id="textodestaque" size="12" style="width:290px;" />
      </strong></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Destaque da esqueda?
          <label>
          <input name="destaque" type="radio" id="radio3" value="1" />
          </label>
Sim
<label>
<input name="destaque" type="radio" id="radio4" value="0" checked="checked"  />
</label>
N&atilde;o</div></td>
    </tr>
    
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Valor:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='valor' type='text' id="valor" size="12" />
      usar o formato 000000.00</strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">&Aacute;rea Constru&iacute;da:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='areacasa' type='text' size="12" id="areacasa" /> 
        m&sup2; (apenas n&uacute;meros)    </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">&Aacute;rea do Lote:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='arealote' type='text' size="12" id="arealote" /> 
        m&sup2;      (apenas n&uacute;meros)</td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Salas:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='salas' type='text' size=3 id="salas">
      (apenas n&uacute;meros) </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Su&iacute;tes:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='suites' type='text' size="3" id="suites" />
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Quartos: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='quartos' type='text' size="3" id="quartos" />
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Banheiros: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='banheiros' type='text' size="3" id="banheiros" />
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Garagem: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='garagem' type='text' size="3" id="garagem" />
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top" style="border-bottom:1px solid #cccccc"><div align="left">Descri&ccedil;&atilde;o do Im&oacute;vel:</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">
        <textarea name="dados" cols="65" rows="7" id="dados"></textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="center"><strong>Dados Particulares</strong></div></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Nome do Dono:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='nomedono' type='text' id="nomedono" size="12" style="width:290px;" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Endere&ccedil;o:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='endereco' type='text' id="endereco" size="12" style="width:290px;" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Telefones de contato:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='telefone' type='text' id="telefone" size="12" style="width:290px;" />
      </strong></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="left">Dados Particulares:</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="center">
          <textarea name="maisdados" cols="65" rows="7" id="maisdados"></textarea>
      </div></td>
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
