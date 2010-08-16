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
$sql = mysql_query("SELECT * FROM banners WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Alteração de Conte&uacute;do</h3>
<form action='?pg=../estrutura/banners/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="550" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
<tr>
  <td width="101" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cliente:</td>
  <td width="389" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
    <input name="cliente" type="text" id="cliente" value="<?=$dados[cliente]?>" size="50" />
  </strong></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link:</td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
    <input name="url" type="text" id="url" value="<?=$dados[url]?>" size="50" />
  </strong></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto:</strong></td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100"><? if($dados[foto01] != "") { echo "<a href='../images/banners/$dados[id]/$dados[foto01]' target='_blank'><img src='thumbs.php?w=180&imagem=../images/banners/$id/$dados[foto01]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
      <td valign="bottom"><strong>Inserir 
        Foto?</strong>:
        <input name="novafoto10" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar()" />
        N&atilde;o
        <input name="novafoto10" type="radio" onclick="javascript: Habilitar();" value="sim" />
        Sim
        <input name="novafoto10" type="radio" value="nada" onclick="javascript:desabilitar()" />
        Nada
        <input name='foto01' type='file' disabled="disabled" class="nao" size="20" id="foto01" /></td>
      </tr>
    </table></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tipo de an&uacute;ncio:</td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="tipo" style="width:280" id="tipo">
    <option value="1" <? if($dados[tipo] == 1){echo "selected";} ?>>An&uacute;ncio no topo: 468 x 60px</option>
    <option value="2" <? if($dados[tipo] == 2){echo "selected";} ?>>An&uacute;ncio na direita: 180 x 150px</option>
    </select></td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data limite<br />
    para Exibi&ccedil;&atilde;o:</td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='data' type='text' id="data" value="<? $data = explode("-", $dados[datafinal]); $data = "$data[2]/$data[1]/$data[0]"; echo $data; ?>" size="10" />
    Formato: DD/MM/AAAA </td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
<? }?>
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