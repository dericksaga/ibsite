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
$sql = mysql_query("SELECT * FROM noticias_dados WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Alteração de Conte&uacute;do</h3>
<form action='?pg=../estrutura/noticias/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
        <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Categoria:</strong></td>
          <td valign="middle" style="border-bottom:1px solid #cccccc">
		  <select name="categoria" style="width:280">
		  <? $sql2 = mysql_query("SELECT * FROM noticias_categorias where id='$dados[idcat]'");
		  $dados2=mysql_fetch_array($sql2);?>
		  <option selected value=<? echo "$dados2[id]";?>><? echo "$dados2[nome]";?></option>
		  <option>======================================</option>
                <?
$sql_cat = mysql_query("SELECT * FROM noticias_categorias");
while ($dados_cat=mysql_fetch_array($sql_cat)){?>
<option value=<? echo "$dados_cat[id]";?>><? echo "$dados_cat[nome]";?></option>
<? }?>
            </select></td>
        </tr>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Título:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
          <textarea name="novotitulo" cols=39 rows=2><? echo $dados[titulo]?></textarea>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Subtítulo:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
          <textarea name='novosubtitulo' rows=2 cols=39><? echo $dados[subtitulo]?></textarea>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Texto:</strong></td>
          
      <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <textarea id="texto" name="texto" ><? echo $dados[texto]?></textarea>          </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100">                   <? if($dados[foto01] != "") { echo "<a href='../images/noticias/$dados[id]/$dados[foto01]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/noticias/$id/$dados[foto01]' border='1'></a>";
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
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Cr&eacute;ditos 
            da Foto:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='creditos_foto' type='text' value="<? echo $dados[creditos_foto]?>" size=52>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>*Nome 
            de Postador:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='nome' type='text' value="<? echo $dados[nome]?>" size=52>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>E-mail 
            do Postador:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='email' type='text' value="<? echo $dados[email]?>" size=52>            </td>
        </tr>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Data 
            de Postagem:</strong></td>
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