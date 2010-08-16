<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "texto",
		theme : "advanced",
		language:'pt',
		skin : "o2k7",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});

</script>
<!-- /TinyMCE -->
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
$sql = mysql_query("SELECT * FROM conteudo_multilingue WHERE id='$id'");
while ($dadosx=mysql_fetch_array($sql)) {
?>

<h3>Alteração de Conte&uacute;do</h3>


<? 	if ($_GET[lingua] == ""){$lingua = $dadosx[lingua];} else { $lingua = $_GET[lingua]; }
	if ($_GET[traducao_de] == ""){$traducao_de = $dadosx[traducao_de];} else { $traducao_de = $_GET[traducao_de]; }
	if ($_GET[hierarquia]  == ""){$hierarquia  = $dadosx[hierarquia];} else { $hierarquia  = $_GET[hierarquia];  }
?>
<form action='?pg=../estrutura/conteudo/alterar_db.php' method='post' enctype="multipart/form-data" name="form">

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
      <td colspan="2" align="left" valign="middle" style="border-bottom:1px solid #cccccc">Menu Clic&aacute;vel?
        <label>
          <input name="clicavel" type="radio" id="clicavel" value="1" <? if($dadosx[clicavel] == "1"){echo "checked='checked'";} ?> />
          Sim
          <input type="radio" name="clicavel" id="clicavel2" value="0" <? if($dadosx[clicavel] == "0" or $dadosx[clicavel] == ""){echo "checked='checked'";} ?>/>
      N&atilde;o</label></td>
    </tr>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Título:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <input name="titulo" type="text" value="<?=$dadosx[titulo]?>" size="100" />
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Subtítulo:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <strong> 
        <input name="subtitulo" type="text" value="<?=$dadosx[subtitulo]?>" size="100" />
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="top" style="border-bottom:1px solid #cccccc">Texto:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <textarea name="texto" onkeyup=storeCaret(this); onclick=storeCaret(this); cols="80" rows="15" onselect=storeCaret(this);><?=$dadosx[texto]?>
      </textarea>      </td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Imagem:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100"><? if($dadosx[foto01] != "") { echo "<a href='../images/conteudo/$dadosx[id]/$dadosx[foto01]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/conteudo/$id/$dadosx[foto01]' border='1'></a>";
				  } else { echo "<font color='#FF0000'>Foto 1, n&atilde;o dispon&iacute;vel</font>";}?></td>
          <td valign="bottom"><strong>Inserir 
            Foto?</strong>:
            <input name="novafoto10" type="radio" value="nao" checked="checked" onclick="javascript:desabilitar()" />
            N&atilde;o
            <input name="novafoto10" type="radio" onclick="javascript: Habilitar();" value="sim" />
            Sim
            <input name="novafoto10" type="radio" value="nada" onclick="javascript:desabilitar()" />
            Nada
            <input name='foto01' type='file' disabled="disabled" class="nao" size="20" /></td>
        </tr>
      </table></td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cr&eacute;ditos:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='coment1' type='text' id="coment1" value="<?=$dadosx[creditos]?>" size=45>      </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Respons&aacute;vel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='responsavel' type='text' id="responsavel" value="<?=$dadosx[responsavel]?>" size=45>      </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td><strong> 
              <input name='data' type='text' value="<? $data=explode("-",$dadosx[data]); echo "$data[2]/$data[1]/$data[0]";?>" size=12> <input name='id' type='hidden' id="id" value="<?=$id?>" size="45" />
              </strong></td>
          </tr>
        </table></td>
    </tr>
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