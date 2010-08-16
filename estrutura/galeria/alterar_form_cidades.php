<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM imoveis_cidades WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Alteração de Conte&uacute;do</h3>
<form action='?pg=../estrutura/imoveis/alterar_cidades_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
<? }?>


        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Cidade:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='nome' type='text' id="nome" value="<? echo $dados[nome]?>" size=52><input name='id' type='hidden' id="nome" value="<? echo $id?>" size=52>            </td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">UF: </td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="uf" id="uf">
            <option value="Acre" <? if($dados[uf]=="Acre"){echo "selected='selected'";} ?>>Acre</option>
            <option value="Alagoas" <? if($dados[uf]=="Alagoas"){echo "selected='selected'";} ?>>Alagoas</option>
            <option value="Amap&aacute;" <? if($dados[uf]=="Amapá" or $dados[uf]=="Amap&aacute;"){echo "selected='selected'";} ?>>Amap&aacute;</option>
            <option value="Amazonas" <? if($dados[uf]=="Amazonas"){echo "selected='selected'";} ?>>Amazonas</option>
            <option value="Bahia" <? if($dados[uf]=="Bahia"){echo "selected='selected'";} ?>>Bahia</option>
            <option value="Cear&aacute;" <? if($dados[uf]=="Ceará"  or $dados[uf]=="Cear&aacute;"){echo "selected='selected'";} ?>>Cear&aacute;</option>
            <option value="Distrito Federal" <? if($dados[uf]=="Distrito Federal"){echo "selected='selected'";} ?>>Distrito Federal</option>
            <option value="Esp&iacute;rito Santo" <? if($dados[uf]=="Espírito Santo" or $dados[uf] == "Esp&iacute;rito Santo"){echo "selected='selected'";} ?>>Esp&iacute;rito Santo</option>
            <option value="Goi&aacute;s" <? if($dados[uf]=="Goiás" or $dados[uf]=="Goi&aacute;s"){echo "selected='selected'";} ?>>Goi&aacute;s</option>
            <option value="Maranh&atilde;o" <? if($dados[uf]=="Maranhão" or $dados[uf]=="Maranh&atilde;o"){echo "selected='selected'";} ?>>Maranh&atilde;o</option>
            <option value="Mato Grosso" <? if($dados[uf]=="Mato Grosso"){echo "selected='selected'";} ?>>Mato Grosso</option>
            <option value="Mato Grosso do Sul" <? if($dados[uf]=="Mato Grosso do Sul"){echo "selected='selected'";} ?>>Mato Grosso do Sul</option>
            <option value="Minas Gerais" <? if($dados[uf]=="Minas Gerais"){echo "selected='selected'";} ?>>Minas Gerais</option>
            <option value="Par&aacute;" <? if($dados[uf]=="Pará" or $dados[uf]=="Par&aacute;"){echo "selected='selected'";} ?>>Par&aacute;</option>
            <option value="Para&iacute;ba" <? if($dados[uf]=="Paraíba" or $dados[uf]=="Para&iacute;ba"){echo "selected='selected'";} ?>>Para&iacute;ba</option>
            <option value="Pernambuco" <? if($dados[uf]=="Pernambuco"){echo "selected='selected'";} ?>>Pernambuco</option>
            <option value="Piau&iacute;" <? if($dados[uf]=="Piauí" or $dados[uf]=="Piau&iacute;"){echo "selected='selected'";} ?>>Piau&iacute;</option>
            <option value="Paran&aacute;" <? if($dados[uf]=="Paraná" or $dados[uf]=="Paran&aacute;"){echo "selected='selected'";} ?>>Paran&aacute;</option>
            <option value="Rio de Janeiro" <? if($dados[uf]=="Rio de Janeiro"){echo "selected='selected'";} ?>>Rio de Janeiro</option>
            <option value="Rio Grande do Norte" <? if($dados[uf]=="Rio Grande do Norte"){echo "selected='selected'";} ?>>Rio Grande do Norte</option>
            <option value="Rio Grande do Sul" <? if($dados[uf]=="Rio Grande do Sul"){echo "selected='selected'";} ?>>Rio Grande do Sul</option>
            <option value="Rond&ocirc;nia" <? if($dados[uf]=="Rondônia" or $dados[uf]=="Rond&ocirc;nia"){echo "selected='selected'";} ?>>Rond&ocirc;nia</option>
            <option value="Roraima" <? if($dados[uf]=="Roraima"){echo "selected='selected'";} ?>>Roraima</option>
            <option value="Santa Catarina" <? if($dados[uf]=="Santa Catarina"){echo "selected='selected'";} ?>>Santa Catarina</option>
            <option value="Sergipe" <? if($dados[uf]=="Sergipe"){echo "selected='selected'";} ?>>Sergipe</option>
            <option value="S&atilde;o Paulo" <? if($dados[uf]=="São Paulo" or $dados[uf]=="S&atilde;o Paulo"){echo "selected='selected'";} ?>>S&atilde;o Paulo</option>
            <option value="Tocantins" <? if($dados[uf]=="Tocantins"){echo "selected='selected'";} ?>>Tocantins</option>
          </select></td>
        </tr>
  </table>
      
  <table align="center">
    <tr> 
          <td width="436" colspan="2"> <p align="center">&nbsp;</p>
            <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <input type='submit' value='Alterar Cidade'>
            </font></p></td>
    </tr>
  </table>

</form>
<? }?>