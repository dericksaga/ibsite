<script Language="JavaScript">
function validate(theForm) {
if (theForm.nome.value == "")
{
  alert("Digite o nome do Link");
  theForm.nome.focus();
  return (false);
}
return (true);
}
</script>
<style type="text/css">
.sim {
	border: 1px solid #7F9DB9;
}
.nao {
	background-color: #CCCCCC;
	border: 1px solid #7F9DB9;
}
</style>
<script>
function Habilitar1() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto01'].checked = true) {
        nForm.elements['foto01'].disabled = false;
		nForm.elements['foto01'].className= "sim";
		} 
}
function Habilitar2() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto02'].checked = true) {
        nForm.elements['foto02'].disabled = false;
		nForm.elements['foto02'].className= "sim";
		} 
}
function Habilitar3() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto03'].checked = true) {
        nForm.elements['foto03'].disabled = false;
		nForm.elements['foto03'].className= "sim";
		} 
}
function Habilitar4() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto04'].checked = true) {
        nForm.elements['foto04'].disabled = false;
		nForm.elements['foto04'].className= "sim";
		} 
}
function Habilitar5() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto05'].checked = true) {
        nForm.elements['foto05'].disabled = false;
		nForm.elements['foto05'].className= "sim";
		} 
}
function Habilitar6() {
nForm = document.forms['cadastro'];
    if(nForm.elements['nova_foto06'].checked = true) {
        nForm.elements['foto06'].disabled = false;
		nForm.elements['foto06'].className= "sim";
		} 
}

function desabilitar1() {
nForm.elements['foto01'].disabled = true;
nForm.elements['foto01'].className = "nao";
}
function desabilitar2() {
nForm.elements['foto02'].disabled = true;
nForm.elements['foto02'].className = "nao";
}
function desabilitar3() {
nForm.elements['foto03'].disabled = true;
nForm.elements['foto03'].className = "nao";
}
function desabilitar4() {
nForm.elements['foto04'].disabled = true;
nForm.elements['foto04'].className = "nao";
}
function desabilitar5() {
nForm.elements['foto05'].disabled = true;
nForm.elements['foto05'].className = "nao";
}
function desabilitar6() {
nForm.elements['foto06'].disabled = true;
nForm.elements['foto06'].className = "nao";
}

</script>

<?
$id = $_GET[id];
$sql = mysql_query("SELECT * FROM filmes_dados where id='$id'");
$dados=mysql_fetch_array($sql);
?>



<form action="?pg=../estrutura/filmes/gal-alterar_db.php" method="post" enctype="multipart/form-data" name="cadastro" id="cadastro"  onsubmit="return validate(this);">
<input type="hidden" name="id" value="<? echo $id?>">
<input type="hidden" name="nome" value="<?=$dados[titulo]?>">
<span style="border-bottom:1px solid #cccccc">
<input name="dia" type="hidden" value="<? $data2 = explode("-",$dados[data]); echo $data2[2];?>" size="3" maxlength="2" />
</span>
<span style="border-bottom:1px solid #cccccc">
<input name="mes" type="hidden" value="<? $data2 = explode("-",$dados[data]); echo $data2[1];?>" size="3" maxlength="2" />
</span>
<span style="border-bottom:1px solid #cccccc">
<input name="ano" type="hidden" value="<? $data2 = explode("-",$dados[data]); echo $data2[0];?>" size="6" maxlength="4" />
</span>
<span style="border-bottom:1px solid #cccccc">
<input name="pastaantiga" type="hidden" value="<? echo $dados[pasta]?>" />
</span>
<span style="border-bottom:1px solid #cccccc">
<input name="pastanova" type="hidden" value="<? echo $dados[pasta]?>" maxlength="255" />
</span>
<h3>Cadastro de Filmes</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 

	      
		  <? if($usernivel == "1") {?>
<? } else {?>
<input name='id_franquia' type='hidden' size=45 value="<? echo $idfranquia?>">
<? }?>


<tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Filme:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"><?=$dados[titulo] ?>&nbsp;</td>
    </tr>
	        <TR> 
      <td align="right" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cartaz:</strong></td>
     
      <td colspan="5" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc">
	  <? if($dados[cartaz] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[cartaz]' border=1>
	  <input name=foto_antiga01 type=hidden value=$dados[cartaz] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
	  <b>Trocar Foto?</b>:<BR>        <input name="nova_foto01" type="radio" value="nao" checked onClick="javascript:desabilitar1()">
        N&atilde;o
        <input name="nova_foto01" type="radio" onClick="javascript: Habilitar1();" value="sim">
              Sim 
              <input name="nova_foto01" type="radio" value="nada" onClick="javascript:desabilitar1()">
              Sem foto<br>              <input name="foto_antiga01" type="hidden" value="<? echo $dados[cartaz]?>">
			  <input name='foto01' type='file' disabled class="nao" size=14>        </td>
      </TR>
	        
	        <tr>
              <td align="right" style="border-bottom:1px solid #cccccc"><strong>Foto para Destaque:</strong></td>
	          <td colspan="5" valign="middle" style="border-bottom:1px solid #cccccc"><? if($dados[imgdestaque] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[imgdestaque]' border=1>
	  <input name=foto_antiga02 type=hidden value=$dados[imgdestaque] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
                  <b>Trocar Foto?</b>:<br />
                  <input name="nova_foto02" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar2()" />
	            N&atilde;o
	            <input name="nova_foto02" type="radio" onclick="javascript: Habilitar2();" value="sim" />
	            Sim
	            <input name="nova_foto02" type="radio" value="nada" onclick="javascript:desabilitar2()" />
	            Sem foto<br />
	            <input name="foto_antiga02" type="hidden" value="<? echo $dados[imgdestaque]?>" />
	            <input name='foto02' type='file' disabled="disabled" class="nao" size="14" />              </td>
    </tr>
	        
	        <tr>
              <td align="right" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cena 1:</strong></td>
	          <td colspan="5" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><? if($dados[cena1] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[cena1]' border=1>
	  <input name=foto_antiga03 type=hidden value=$dados[cena1] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
                  <b>Trocar Foto?</b>:<br />
                  <input name="nova_foto03" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar3()" />
	            N&atilde;o
	            <input name="nova_foto03" type="radio" onclick="javascript: Habilitar3();" value="sim" />
	            Sim
	            <input name="nova_foto03" type="radio" value="nada" onclick="javascript:desabilitar3()" />
	            Sem foto<br />
	            <input name="foto_antiga03" type="hidden" value="<? echo $dados[cena1]?>" />
	            <input name='foto03' type='file' disabled="disabled" class="nao" size="14" />              </td>
    </tr>
	        
	        <tr>
              <td align="right" style="border-bottom:1px solid #cccccc"><strong>Cena 2:</strong></td>
	          <td colspan="5" valign="middle" style="border-bottom:1px solid #cccccc"><? if($dados[cena2] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[cena2]' border=1>
	  <input name=foto_antiga04 type=hidden value=$dados[cena2] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
                  <b>Trocar Foto?</b>:<br />
                  <input name="nova_foto04" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar4()" />
	            N&atilde;o
	            <input name="nova_foto04" type="radio" onclick="javascript: Habilitar4();" value="sim" />
	            Sim
	            <input name="nova_foto04" type="radio" value="nada" onclick="javascript:desabilitar4()" />
	            Sem foto<br />
	            <input name="foto_antiga04" type="hidden" value="<? echo $dados[cena2]?>" />
	            <input name='foto04' type='file' disabled="disabled" class="nao" size="14" />              </td>
    </tr>
	        
	        <tr>
              <td align="right" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><strong>Cena 3:</strong></td>
	          <td colspan="5" valign="middle" bgcolor="#FFFFCC" style="border-bottom:1px solid #cccccc"><? if($dados[cena3] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[cena3]' border=1>
	  <input name=foto_antiga05 type=hidden value=$dados[cena3] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
                  <b>Trocar Foto?</b>:<br />
                  <input name="nova_foto05" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar5()" />
	            N&atilde;o
	            <input name="nova_foto05" type="radio" onclick="javascript: Habilitar5();" value="sim" />
	            Sim
	            <input name="nova_foto05" type="radio" value="nada" onclick="javascript:desabilitar5()" />
	            Sem foto<br />
	            <input name="foto_antiga05" type="hidden" value="<? echo $dados[cena3]?>" />
	            <input name='foto05' type='file' disabled="disabled" class="nao" size="14" />              </td>
    </tr>
	        
	        <tr>
              <td align="right" style="border-bottom:1px solid #cccccc"><strong>Cena 4:</strong></td>
	          <td colspan="5" valign="middle" style="border-bottom:1px solid #cccccc"><? if($dados[cena4] != "") {
	  echo "<img align='left' src='thumbs.php?w=70&imagem=../images/filmes/$dados[id]/$dados[cena4]' border=1>
	  <input name=foto_antiga06 type=hidden value=$dados[cena4] size=12>";
	  } else {
	  echo "<b>nenhuma foto</b>";
	  }?>
                  <b>Trocar Foto?</b>:<br />
                  <input name="nova_foto06" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar6()" />
	            N&atilde;o
	            <input name="nova_foto06" type="radio" onclick="javascript: Habilitar6();" value="sim" />
	            Sim
	            <input name="nova_foto06" type="radio" value="nada" onclick="javascript:desabilitar6()" />
	            Sem foto<br />
	            <input name="foto_antiga06" type="hidden" value="<? echo $dados[cena4]?>" />
	            <input name='foto06' type='file' disabled="disabled" class="nao" size="14" />              </td>
    </tr>
	        
	        
	  
	  	<? if($dados[id_cat] == 2 OR $dados[id_cat] == 3 OR $cat != ""){?>
	<? }?>
</table>
<table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Alterar'>
              </font></p></td>
        </tr>
  </table>
</form>


<br>

