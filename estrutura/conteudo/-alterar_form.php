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

<h3>Altera��o de Conte&uacute;do</h3>


<? 	if ($_GET[lingua] == ""){$lingua = $dadosx[lingua];} else { $lingua = $_GET[lingua]; }
	if ($_GET[traducao_de] == ""){$traducao_de = $dadosx[traducao_de];} else { $traducao_de = $_GET[traducao_de]; }
	if ($_GET[hierarquia]  == ""){$hierarquia  = $dadosx[hierarquia];} else { $hierarquia  = $_GET[hierarquia];  }
?>
<form action='?pg=../estrutura/conteudo/alterar_db.php' method='post' enctype="multipart/form-data" name="form">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">L&iacute;ngua:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="lingua_1" style="width:280" id="lingua_1"  onchange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
        <option value="?pg=../estrutura/conteudo/alterar_form.php&lingua=ptbr&id=<?=$id?>" <? if($lingua == "ptbr"){echo "selected";} ?>>Portugu&ecirc;s</option>
        <option value="?pg=../estrutura/conteudo/alterar_form.php&lingua=en&id=<?=$id?>" <? if($lingua == "en"){echo "selected";} ?>>Ingl&ecirc;s</option>
      </select>
        <strong>
        <input name='lingua' type='hidden' id="lingua" value="<?=$lingua?>" size="45" />
      </strong></td>
    </tr>
    <? if($usernivel == "1") {?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tradu&ccedil;&atilde;o de:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="traducao" style="width:280" id="traducao" onchange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
          <option value="?pg=../estrutura/conteudo/alterar_form.php&lingua=<?=$lingua?>&traducao_de=0&hierarquia=0&id=<?=$id?>" selected>Conte�do Original (Primeira Postagem)</option>
          <option value="?pg=../estrutura/conteudo/alterar_form.php&lingua=<?=$lingua?>&traducao_de=0&id=<?=$id?>" >======================================</option>
          <?
			$sql= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 0 and lingua <> '$lingua'");
			while ($dados=mysql_fetch_array($sql)){
				echo "<option value='?pg=../estrutura/conteudo/alterar_form.php&lingua=$lingua&traducao_de=$dados[id]&hierarquia=$dados[hierarquia]&id=$id';";
				if($traducao_de == "$dados[id]"){echo " selected ";}
				echo ">$dados[titulo]</option>";
				$sql2= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 1 and filho_de = $dados[id]");
				while ($dados2=mysql_fetch_array($sql2)){
					echo "<option value='?pg=../estrutura/conteudo/alterar_form.php&lingua=$lingua&traducao_de=$dados2[id]&hierarquia=$dados2[hierarquia]&id=$id';";
					if($traducao_de == "$dados2[id]"){echo " selected ";}
					echo ">&nbsp;&nbsp;&nbsp;";
					echo "&nbsp;&nbsp;&nbsp;";
					echo "$dados2[titulo]</option>";
					$sql3= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 2 and filho_de = $dados2[id]");
					while ($dados3=mysql_fetch_array($sql3)){
						echo "<option value='?pg=../estrutura/conteudo/alterar_form.php&lingua=$lingua&traducao_de=$dados3[id]&hierarquia=$dados3[hierarquia]&id=$id';";
						if($traducao_de == "$dados3[id]"){echo " selected ";}
						echo ">&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "$dados3[titulo]</option>";
					}
				}
			} ?>
      </select><input name='traducao_de' type='hidden' id="traducao_de" value="<?=$traducao_de?>" size="45" />
      <input name='id' type='hidden' id="id" value="<?=$id?>" size="45" /></td>
    </tr>
	<? if($traducao_de == 0){ ?>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Filho de:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="filho_de" style="width:280" id="filho_de">
            <option value="0" selected="selected">Menu pai (sem hierarquia)</option>
            <option value="0" >======================================</option>
            <?	$sql= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 0 and lingua = '$lingua'");
                while ($dados=mysql_fetch_array($sql)){
                    echo "<option value='$dados[id]'";
					if($dadosx[filho_de] == "$dados[id]"){echo " selected ";}
                    echo ";>$dados[titulo]</option>";
                    $sql2= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 1 and filho_de = $dados[id]");
                    while ($dados2=mysql_fetch_array($sql2)){
                        echo "<option value='$dados2[id]'";
						if($dadosx[filho_de] == "$dados2[id]"){echo " selected ";}
                        echo ";>&nbsp;&nbsp;&nbsp;";
                        echo "&nbsp;&nbsp;&nbsp;";
                        echo "$dados2[titulo]</option>";
                    }
                } ?>
          </select></td>
        </tr>
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
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">T�tulo:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <input name="titulo" type="text" value="<?=$dadosx[titulo]?>" size="100" />
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Subt�tulo:</td>
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
          <td width="100"><? if($dados[foto01] != "") { echo "<a href='../images/noticias/$dados[id]/$dados[foto01]' target='_blank'><img src='thumbs.php?w=80&imagem=../images/noticias/$id/$dados[foto01]' border='1'></a>";
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
              <input name='data' type='text' value="<? $data=explode("-",$dadosx[data]); echo "$data[2]/$data[1]/$data[0]";?>" size=12>
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