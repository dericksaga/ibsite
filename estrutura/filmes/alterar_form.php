<style type="text/css">
.sim {}
.nao {}
</style>
<script>
function Habilitar() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto10'].checked = true) {
        nForm.elements['foto01'].disabled = false;
		nForm.elements['foto01'].className= "sim";
    } 
}

function desabilitar() {
nForm.elements['foto01'].disabled = true;
nForm.elements['foto01'].className = "nao";
}
</script>
<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM filmes_dados where id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Altera&ccedil;&atilde;o de Conte&uacute;do</h3>
<form action='?pg=../estrutura/filmes/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Programa:</td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="categoria" style="width:280" id="categoria">
    <?
$sql2= mysql_query("SELECT * FROM filmes_categorias order by id");
while ($dados2=mysql_fetch_array($sql2)){?>
    <option value="<? echo "$dados2[id]";?>" <? if($dados2[id] == $dados[title]){echo "selected";} ?>><? echo "$dados2[nome]";?></option>
    <? }?>
  </select></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><b>Titulo:</b></td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><input name="titulo" type="text" value="<?=$dados[titulo]?>" size="45" maxlength="255" /></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Sinopse:</strong></td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
    <textarea name="sinopse" cols="36" rows="5" id="sinopse"><?=$dados[sinopse]?>
  </textarea>
  </strong></td>
</tr>
<tr valign="middle">
  <td align="right" style="border-bottom:1px solid #cccccc"><b>Classifica&ccedil;&atilde;o:</b></td>
  <td style="border-bottom:1px solid #cccccc"><input name="classificacao" type="text" id="classificacao" value="<?=$dados[classificacao]?>" size="45" maxlength="255" /></td>
</tr>
<tr valign="middle">
  <td align="right" style="border-bottom:1px solid #cccccc"><b>Site oficial:</b></td>
  <td style="border-bottom:1px solid #cccccc"><input name="site" type="text" id="site" value="<?=$dados[site]?>" size="45" maxlength="255" /></td>
</tr>
<tr valign="middle">
  <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><b>V&iacute;deo:</b></td>
  <td style="border-bottom:1px solid #cccccc"><textarea name="trailer" cols="36" rows="4" id="trailer"><?=$dados[trailer]?>
  </textarea>
    <br /></td>
</tr>
<tr valign="middle">
  <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><b>Atores / Pessoal / <br />
    Entidade envolvida:</b></td>
  <td style="border-bottom:1px solid #cccccc"><strong>
    <textarea name="atores" cols="36" rows="3" id="atores"><?=$dados[atores]?>
      </textarea>
  </strong></td>
</tr>
<tr valign="middle">
  <td align="right" style="border-bottom:1px solid #cccccc"><b>Dire&ccedil;&atilde;o:</b></td>
  <td style="border-bottom:1px solid #cccccc"><input name="direcao" type="text" id="direcao" value="<?=$dados[direcao]?>" size="45" maxlength="255" /></td>
</tr>
<tr valign="middle">
  <td align="right" style="border-bottom:1px solid #cccccc"><b>G&ecirc;nero:</b></td>
  <td style="border-bottom:1px solid #cccccc"><input name="genero" type="text" id="genero" value="<?=$dados[genero]?>" size="45" maxlength="255" /></td>
</tr>
<tr valign="middle">
  <td align="right" style="border-bottom:1px solid #cccccc"><b>Dura&ccedil;&atilde;o:</b></td>
  <td style="border-bottom:1px solid #cccccc"><input name="duracao" type="text" id="duracao" value="<?=$dados[duracao]?>" size="45" maxlength="255" /></td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100">                   <? if($dados[cartaz] != "") { echo "<a href='../images/filmes/$dados[id]/$dados[cartaz]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/filmes/$id/$dados[cartaz]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
                <td valign="bottom"><strong>Inserir 
                  Foto?</strong>:
                  <input name="novafoto10" type="radio" value="nao" checked onClick="javascript:desabilitar()">
                  N&atilde;o
                  <input name="novafoto10" type="radio" onClick="javascript: Habilitar();" value="sim">
                  Sim 
                  <input name="novafoto10" type="radio" value="nada" onClick="javascript:desabilitar()">
                  Nada 
                  <input name='foto01' type='file' disabled class="nao" size=20>                </td>
              </tr>
          </table></td>
        </tr>
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
<? }?>


        <tr> 
          <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center"><b>Destaque?
            <label>
              <input name="destaque" type="radio" id="destaque3" value="1" <? if($dados[destaque] == 1){ echo 'checked';} ?> />
              sim</label>
            </b><b>
              <label>
                <input type="radio" name="destaque" id="destaque4" value="0" <? if($dados[destaque] == 0){ echo 'checked';} ?>/>
                n&atilde;o </label>
          </b></div></td>
        </tr>
  </table>
      
  <table align="center">
<tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Alterar Notícia'>
              </font></p></td>
    </tr>
  </table>

</form>
<? }?>
<script>
function Habilitar() {
nForm = document.forms['form'];
    if(nForm.elements['novafoto10'].checked = true) {
        nForm.elements['foto01'].disabled = false;
		nForm.elements['foto01'].className= "sim";
    } 
}

function desabilitar() {
nForm.elements['foto01'].disabled = true;
nForm.elements['foto01'].className = "nao";
}
</script>