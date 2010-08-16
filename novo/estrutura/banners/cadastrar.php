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

<form action='?pg=../estrutura/banners/cadastrar_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Banner</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='categoria' type='hidden' size=45 value="1">
    <? }?>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cliente:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <input name="cliente" type="text" id="cliente" value="" size="50" />
        </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Link:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name="url" type="text" id="url" value="" size="50" />
      </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Arquivo<br />
      (jpg):</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='foto01' type='file' size=30>      </td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tipo de an&uacute;ncio:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
		<select name="tipo" style="width:280" id="tipo">
        	<option value="1">Anúncio no topo: 468 x 60px</option>
        	<option value="2">Anúncio na direita: 180 x 150px</option>
		</select></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data limite<br />
      para Exibi&ccedil;&atilde;o:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='data' type='text' size=10 id="data"> 
        Formato: DD/MM/AAAA      </td>
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
