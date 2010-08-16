	<script type="text/javascript" src="../js/demo.js"></script>
	<script type="text/javascript" src="../js/funcoes.js"></script>
	<link rel="stylesheet" href="../css/demo.css" type="text/css" />

<? 	require '../php/funcoes.php';
	$recupera = $_GET[recupera];
   	$city = $_GET[city];
$sql2 = mysql_query("SELECT * FROM imoveis where codigo = $recupera");
$dados2=mysql_fetch_array($sql2);
?>
	<div id="accordion">
  <h3 class="toggler" align="center">Cadastro de Im&oacute;veis</h3>
		<div class="element">

<form action='?pg=../estrutura/imoveis/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="codigo" id="codigo" value="<?=$recupera?>" />
<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">Altere os dados do cadastro ou clique abaixo, <br />
        no link &quot;Inclus&atilde;o de Fotografias&quot; para enviar <br />
        as fotos deste im&oacute;vel.</td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc" bgcolor="#E9E9E9"><div align="center" style="font-size:16px;"><b>C&oacute;digo deste im&oacute;vel: <? echo "BV"; echo $dados2[codigo]*7; ?></b></div></td>
      </tr>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cidade:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc">          <select name="city" style="width:290px;" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)" id="city">
      <option></option>
<? $sql = mysql_query("SELECT * FROM imoveis_cidades order by nome");
while ($dados=mysql_fetch_array($sql)){
	echo "<option value='?pg=../estrutura/imoveis/mandafotos.php&city=$dados[id]&recupera=$dados2[codigo]' ";
	if ($city <> ""){
		if ($city == $dados[id]){echo "selected = 'selected'";}
	} else {
		if ($dados2[cidade] == $dados[id]){echo "selected = 'selected'";}
	}

	echo ">$dados[nome] - $dados[uf]</option>";
}?>
          </select><input type="hidden" value="<? if($city <> ""){ echo $city;} else {echo $dados2[cidade];} ?>" name="cidade" id="cidade"  /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Bairro:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="bairro" style="width:290px" id="bairro">
<? 
if($dados2[cidade] <> ""){
if ($city <> ""){$cidadeoficial = $city;} else {$cidadeoficial = $dados2[cidade];}
$sql = mysql_query("SELECT * FROM imoveis_bairros where cidade = $cidadeoficial order by nome");
while ($dados=mysql_fetch_array($sql)){
?>
          <option value="<?=$dados[id] ?>" <? if($dados2[bairro] == $dados[id]){echo "selected='selected'";} ?>><?=$dados[nome] ?></option>
<? }} ?>
      </select></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tipo de Im&oacute;vel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="tipo" style="width:290px" id="tipo">
          <?
$sql= mysql_query("SELECT * FROM imoveis_tipos order by nome");
while ($dados=mysql_fetch_array($sql)){?>
          <option value="<? echo "$dados[id]";?>" <? if($dados2[tipo] == $dados[id]){echo "selected='selected'";} ?>><? echo "$dados[nome]";?></option>
          <? }?>
      </select></td>
    </tr>
    
    <tr> 
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Im&oacute;vel para: 
          <label>
          <input name="situacao" type="radio" id="radio" value="1" <? if($dados2[situacao] == 1){echo "checked='checked'";} ?> />
          </label>
      Venda 
      <label>
      <input type="radio" name="situacao" id="radio2" value="0" <? if($dados2[situacao] == 0){echo "checked='checked'";} ?> />
      </label> 
      Aluguel
</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Destaque do topo?
        <label>
              <input name="destaqueprincipal" type="radio" id="radio5" value="1" <? if($dados2[destaqueprincipal] == 1){echo "checked='checked'";} ?> />
              </label>
        Sim
        <label>
          <input name="destaqueprincipal" type="radio" id="radio6" value="0" <? if($dados2[destaqueprincipal] == 0){echo "checked='checked'";} ?>  />
          </label>
        N&atilde;o</div></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Texto para o destaque do topo:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='textodestaque' type='text' id="textodestaque" size="12" style="width:290px;" value="<?=$dados2[textodestaque]?>" />
      </strong></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">Destaque?
          <label>
            <input name="destaque" type="radio" id="radio3" value="1" <? if($dados2[destaque] == 1){echo "checked='checked'";} ?> />
            </label>
        Sim
        <label>
  <input type="radio" name="destaque" id="radio4" value="0" <? if($dados2[destaque] == 0){echo "checked='checked'";} ?> />
  </label>
N&atilde;o </div></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Valor:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='valor' type='text' id="valor" value="<?=$dados2[valor]?>" size="12" />
      Usar o formato 000000.00</strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">&Aacute;rea Constru&iacute;da:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='areacasa' type='text' size="12" id="areacasa" value="<?=$dados2[areacasa]?>" /> 
        m&sup2; (apenas n&uacute;meros)    </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">&Aacute;rea do Lote:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">        <input name='arealote' type='text' size="12" id="arealote" value="<?=$dados2[arealote]?>"/> 
        m&sup2;      (apenas n&uacute;meros)</td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Salas:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='salas' type='text' size=3 id="salas" value="<?=$dados2[salas]?>">
      (apenas n&uacute;meros) </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Su&iacute;tes:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='suites' type='text' size="3" id="suites" value="<?=$dados2[suites]?>"/>
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Quartos: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='quartos' type='text' size="3" id="quartos" value="<?=$dados2[quartos]?>"/>
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Banheiros: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='banheiros' type='text' size="3" id="banheiros" value="<?=$dados2[banheiros]?>"/>
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Garagem: </td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
        <input name='garagem' type='text' size="3" id="garagem" value="<?=$dados2[garagem]?>"/>
      (apenas n&uacute;meros)</td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top" style="border-bottom:1px solid #cccccc"><div align="left">Descri&ccedil;&atilde;o do Im&oacute;vel:</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center">
        <textarea name="dados" cols="65" rows="7" id="dados"><?=$dados2[dados]?></textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="center"><strong>Dados Particulares</strong></div></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Nome do Dono:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='nomedono' type='text' id="nomedono" size="12" style="width:290px;" value="<?=$dados2[nomedono]?>" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Endere&ccedil;o:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='endereco' type='text' id="endereco" size="12" style="width:290px;"  value="<?=$dados2[endereco]?>" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Telefones de contato:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>
        <input name='telefone' type='text' id="telefone" size="12" style="width:290px;" value="<?=$dados2[telefone]?>" />
      </strong></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="left">Dados Particulares:</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><div align="center">
          <textarea name="maisdados" cols="65" rows="7" id="maisdados"><?=$dados2[maisdados]?></textarea>
      </div></td>
    </tr>
  </table>
	  
	  
<table align="center">
<tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Alterar este cadastro'>
              </font></p></td>
        </tr>
  </table>
</form>
</div>

  <h3 class="toggler" align="center">Inclus&atilde;o de Fotografias</h3>
		<div class="element">

<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class='trim'>
  <tr >
    <td height="25" colspan="3" valign="bottom" class='highlight'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b class="texto2">Adicione 
      uma foto</b></font></td>
    <td height="25" valign="bottom" class='highlight'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b class="texto2">Fotos 
      adicionadas</b></font></td>
  </tr>
  <tr >
    <form action='?pg=../estrutura/imoveis/adicionar_fotos.php&imovel=<?=$dados2[codigo] ?>' method="post" enctype='multipart/form-data' onsubmit='return checkrequired(this)'>
      <td height="25" colspan="2" valign='top' class='hint'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <font size="1">
        <?
			// only display image upload form if GD version meets requirements
			if(checkgd()) {
				echo "
				<input type=file name='image' alt='required' style='width:250'> <br>
				<br>
				<b>Aten&ccedil;&atilde;o:</b><br>
				A foto tem estar no formato JPEG e não pode ser muito grande
				(aproximadamente 1.3 Megapixels é o ideal).<br>
				D&ecirc; prefer&ecirc;ncia para fotos tiradas de c&acirc;meras digitais.<br><br>
				<input type=hidden name='codigo' value='$codigo'>
				<input class='texto2' type=submit value='Enviar'><br>
				";
			} else {
				echo "
				Erro <b>GDGraphicsLibrary2</b><br>
				Todas as fun&ccedil;&otilde;es de imagens est&atilde;o desabilitadas.<br>
				Entre em contato com o desenvolvedor.";
			}
			?>
      </font> </font></td>
    </form>
    <td height="25" colspan="2" align="center" valign='top' class='hint'><table border="0" align="center" cellpadding="0" cellspacing="5">
      <?
			// get images for this listing and display thumbnails
				$sql3 = mysql_query("SELECT * FROM fotos where codigo = '$recupera'");
				
				$n = 1; // counter for thumb display
				while($row = mysql_fetch_array($sql3) or die()) {
					if($n % 2) { echo "<tr><td width=40><!-- SPACER --></td>"; } // if n is odd, start a new row
					// display data
					echo "
					<td width=140 valign='top'>
						<img src='../images/miniaturas/$row[thumb]' vspace=5><br>
						<input class='texto2' type=button value='Apagar' onClick=\"verify_image($row[id], ".$_GET[recupera].");\">
					</td>
					";
					if(!($n % 2)) { echo "</tr>"; } // if n is even, end row
					$n++;
				}
				if(($n - 1) % 2) { echo "</tr>"; } // if the last item was odd, end row
				
			?>
    </table>
        <div align="center"></div></td>
  </tr>
</table>
</div>
</div>