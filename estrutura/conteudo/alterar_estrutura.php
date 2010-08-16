<style type="text/css">
.sim {}
.nao {}
</style>
<script>
function Habilitar01() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto10'].checked = true) {
        nForm.elements['foto01'].disabled = false;
		nForm.elements['foto01'].className= "sim";
    } 
}

function desabilitar01() {
nForm.elements['foto01'].disabled = true;
nForm.elements['foto01'].className = "nao";
}
function Habilitar02() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto20'].checked = true) {
        nForm.elements['foto02'].disabled = false;
		nForm.elements['foto02'].className= "sim";
    } 
}

function desabilitar02() {
nForm.elements['foto02'].disabled = true;
nForm.elements['foto02'].className = "nao";
}
function Habilitar03() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto30'].checked = true) {
        nForm.elements['foto03'].disabled = false;
		nForm.elements['foto03'].className= "sim";
    } 
}

function desabilitar03() {
nForm.elements['foto03'].disabled = true;
nForm.elements['foto03'].className = "nao";
}
function Habilitar04() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto40'].checked = true) {
        nForm.elements['foto04'].disabled = false;
		nForm.elements['foto04'].className= "sim";
    } 
}

function desabilitar04() {
nForm.elements['foto04'].disabled = true;
nForm.elements['foto04'].className = "nao";
}
function Habilitar05() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto50'].checked = true) {
        nForm.elements['foto05'].disabled = false;
		nForm.elements['foto05'].className= "sim";
    } 
}

function desabilitar05() {
nForm.elements['foto05'].disabled = true;
nForm.elements['foto05'].className = "nao";
}
function Habilitar06() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto60'].checked = true) {
        nForm.elements['foto06'].disabled = false;
		nForm.elements['foto06'].className= "sim";
    } 
}

function desabilitar06() {
nForm.elements['foto06'].disabled = true;
nForm.elements['foto06'].className = "nao";
}
function Habilitar07() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto70'].checked = true) {
        nForm.elements['foto07'].disabled = false;
		nForm.elements['foto07'].className= "sim";
    } 
}

function desabilitar07() {
nForm.elements['foto07'].disabled = true;
nForm.elements['foto07'].className = "nao";
}
function Habilitar08() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto80'].checked = true) {
        nForm.elements['foto08'].disabled = false;
		nForm.elements['foto08'].className= "sim";
    } 
}

function desabilitar08() {
nForm.elements['foto08'].disabled = true;
nForm.elements['foto08'].className = "nao";
}
</script>
<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM conteudo_estrutura WHERE id=1");
while ($dadosx=mysql_fetch_array($sql)) {
?>

<h3>Alteração de Conte&uacute;do</h3>


<? 	if ($_GET[lingua] == ""){$lingua = $dadosx[lingua];} else { $lingua = $_GET[lingua]; }
	if ($_GET[traducao_de] == ""){$traducao_de = $dadosx[traducao_de];} else { $traducao_de = $_GET[traducao_de]; }
	if ($_GET[hierarquia]  == ""){$hierarquia  = $dadosx[hierarquia];} else { $hierarquia  = $_GET[hierarquia];  }
?>
<form action='?pg=../estrutura/conteudo/alterar_estrutura_db.php' method='post' enctype="multipart/form-data" name="form">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <? if($usernivel == "1") {?>
    <? if($traducao_de == 0){ ?>
    <? } ?>
    <? } else {?>
    <input name='categoria' type='hidden' size=45 value="1">
    <? }?>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cor do fundo:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <input name="cor" type="text" id="cor" value="<?=$dadosx[cor_fundo]?>" size="7" />
        <br />
(Cor Hexadecimal, incluindo o # ou nome css)</strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Exibi&ccedil;&atilde;o:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name="exibicao" type="radio" id="exibicao" value="e" <? if($dadosx[exibicao] == "e"){echo "checked";} ?> />
      <label for="exibicao">Esquerda 
        <input type="radio" name="exibicao" id="exibicao2" value="d" <? if($dadosx[exibicao] == "d"){echo "checked";} ?>/>
      Direita 
      <input type="radio" name="exibicao" id="exibicao3" value="l" <? if($dadosx[exibicao] == "l"){echo "checked";} ?>/>
      Lado a Lado</label></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">Fundo:</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto08] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto08]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto08]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto80" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar08()" />
            N&atilde;o
            <input name="novafoto80" type="radio" onclick="javascript: Habilitar08();" value="sim" />
            Sim
            <input name="novafoto80" type="radio" value="nada" onclick="javascript:desabilitar08()" />
            Nada
            <input name='foto08' type='file' disabled="disabled" class="nao" size="20" id="foto08" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle" style="border-bottom:1px solid #cccccc"><br />
      Imagens e links da anima&ccedil;&atilde;o da primeira p&aacute;gina<br />
      <br /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto01] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto01]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto01]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto10" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar01()" />
            N&atilde;o
            <input name="novafoto10" type="radio" onclick="javascript: Habilitar01();" value="sim" />
            Sim
            <input name="novafoto10" type="radio" value="nada" onclick="javascript:desabilitar01()" />
            Nada
            <input name='foto01' type='file' disabled="disabled" class="nao" size="20" id="foto01" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 1:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url1' type='text' id="url1" value="<?=$dadosx[url1]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto02] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto02]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto02]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto20" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar02()" />
            N&atilde;o
            <input name="novafoto20" type="radio" onclick="javascript: Habilitar02();" value="sim" />
            Sim
            <input name="novafoto20" type="radio" value="nada" onclick="javascript:desabilitar02()" />
            Nada
            <input name='foto02' type='file' disabled="disabled" class="nao" size="20" id="foto02" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 2:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url2' type='text' id="coment3" value="<?=$dadosx[url2]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto03] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto03]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto03]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto30" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar03()" />
            N&atilde;o
            <input name="novafoto30" type="radio" onclick="javascript: Habilitar03();" value="sim" />
            Sim
            <input name="novafoto30" type="radio" value="nada" onclick="javascript:desabilitar03()" />
            Nada
            <input name='foto03' type='file' disabled="disabled" class="nao" size="20" id="foto03" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 3:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url3' type='text' id="coment4" value="<?=$dadosx[url3]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto04] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto04]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto04]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto40" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar04()" />
            N&atilde;o
            <input name="novafoto40" type="radio" onclick="javascript: Habilitar04();" value="sim" />
            Sim
            <input name="novafoto40" type="radio" value="nada" onclick="javascript:desabilitar04()" />
            Nada
            <input name='foto04' type='file' disabled="disabled" class="nao" size="20" id="foto04" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 4:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url4' type='text' id="coment5" value="<?=$dadosx[url4]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto05] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto05]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto05]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto50" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar05()" />
            N&atilde;o
            <input name="novafoto50" type="radio" onclick="javascript: Habilitar05();" value="sim" />
            Sim
            <input name="novafoto50" type="radio" value="nada" onclick="javascript:desabilitar05()" />
            Nada
            <input name='foto05' type='file' disabled="disabled" class="nao" size="20" id="foto05" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 5:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url5' type='text' id="coment6" value="<?=$dadosx[url5]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto06] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto06]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto06]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto60" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar06()" />
            N&atilde;o
            <input name="novafoto60" type="radio" onclick="javascript: Habilitar06();" value="sim" />
            Sim
            <input name="novafoto60" type="radio" value="nada" onclick="javascript:desabilitar06()" />
            Nada
            <input name='foto06' type='file' disabled="disabled" class="nao" size="20" id="foto06" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 6:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url6' type='text' id="coment7" value="<?=$dadosx[url6]?>" size="45" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">&nbsp;</td>
      <td valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto07] != "") { echo "<a href='../images/estrutura/$dadosx[id]/$dadosx[foto07]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/estrutura/1/$dadosx[foto07]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Trocar 
            Foto?</strong>:
            <input name="novafoto70" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar07()" />
            N&atilde;o
            <input name="novafoto70" type="radio" onclick="javascript: Habilitar07();" value="sim" />
            Sim
            <input name="novafoto70" type="radio" value="nada" onclick="javascript:desabilitar07()" />
            Nada
            <input name='foto07' type='file' disabled="disabled" class="nao" size="20" id="foto07" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link 7:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='url7' type='text' id="coment8" value="<?=$dadosx[url7]?>" size="45" /></td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
  </table>
	  
	  
<table>
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Alterar'>
          </font></p></td>
    </tr>
  </table>
</form>
<? }?>