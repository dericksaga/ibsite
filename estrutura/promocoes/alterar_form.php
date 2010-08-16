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
$sql = mysql_query("SELECT * FROM promocoes_dados WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Alteração de Conte&uacute;do</h3>
<form action='?pg=../estrutura/promocoes/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="490" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
        <? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Nome da Promo&ccedil;&atilde;o:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
          <textarea name="novotitulo" cols=39 rows=2><? echo $dados[titulo]?></textarea>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Pergunta:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
          <textarea name='novosubtitulo' rows=2 cols=39><? echo $dados[subtitulo]?></textarea>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Resposta:</strong></td>
          
      <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <textarea name="texto" cols="39" rows="2" id="texto" ><? echo $dados[texto]?></textarea>          </td>
        </tr>
        <tr>
          <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><strong>Texto:</strong></td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><textarea name="fotos_extras" cols="39" rows="5" id="fotos_extras" ><? echo $dados[fotos_extras]?></textarea></td>
    </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Imagem Ilustrativa:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100">                   <? if($dados[foto01] != "") { echo "<a href='../images/promocoes/$dados[id]/$dados[foto01]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/promocoes/$id/$dados[foto01]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
                <td valign="bottom"><strong>Inserir 
                  Imagem?</strong>:
                  <br />
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
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Data de in&iacute;cio da promo&ccedil;&atilde;o:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='email' type='text' value="<? $data=explode("-",$dados[email]); echo "$data[2]/$data[1]/$data[0]";?>" size=12>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Data 
            final da promo&ccedil;&atilde;o:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
          <tr>
                <td> <input name='data' type='text' value="<? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]";?>" size=12>                  </td>
            </tr>
          </table></td>
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