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

<? 	if ($_GET[lingua] == ""){$lingua = "ptbr";} else { $lingua = $_GET[lingua]; }
	if ($_GET[traducao_de] == ""){$traducao_de = 0;} else { $traducao_de = $_GET[traducao_de]; }
	if ($_GET[hierarquia]  == ""){$hierarquia  = 0;} else { $hierarquia  = $_GET[hierarquia];  }
?>
<form action='?pg=../estrutura/conteudo/cadastrar_db.php' method='post' enctype="multipart/form-data" name="form">
  <h3>Cadastro de Conte&uacute;do</h3>

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">L&iacute;ngua:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="lingua_1" style="width:280" id="lingua_1"  onchange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
        <option value="?pg=../estrutura/conteudo/cadastrar.php&lingua=ptbr" <? if($lingua == "ptbr"){echo "selected";} ?>>Portugu&ecirc;s</option>
        <option value="?pg=../estrutura/conteudo/cadastrar.php&lingua=en" <? if($lingua == "en"){echo "selected";} ?>>Ingl&ecirc;s</option>
      </select>
        <strong>
        <input name='lingua' type='hidden' id="lingua" value="<?=$lingua?>" size="45" />
      </strong></td>
    </tr>
    <? if($usernivel == "1") {?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Tradu&ccedil;&atilde;o de:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="traducao" style="width:280" id="traducao" onchange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
          <option value="?pg=../estrutura/conteudo/cadastrar.php&lingua=<?=$lingua?>&traducao_de=0&hierarquia=0" selected>Conteúdo Original (Primeira Postagem)</option>
          <option value="?pg=../estrutura/conteudo/cadastrar.php&lingua=<?=$lingua?>&traducao_de=0" >======================================</option>
          <?
			$sql= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 0 and lingua <> '$lingua'");
			while ($dados=mysql_fetch_array($sql)){
				echo "<option value='?pg=../estrutura/conteudo/cadastrar.php&lingua=$lingua&traducao_de=$dados[id]&hierarquia=$dados[hierarquia]';";
				if($traducao_de == "$dados[id]"){echo " selected ";}
				echo ">$dados[titulo]</option>";
				$sql2= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 1 and filho_de = $dados[id]");
				while ($dados2=mysql_fetch_array($sql2)){
					echo "<option value='?pg=../estrutura/conteudo/cadastrar.php&lingua=$lingua&traducao_de=$dados2[id]&hierarquia=$dados2[hierarquia]';";
					if($traducao_de == "$dados2[id]"){echo " selected ";}
					echo ">&nbsp;&nbsp;&nbsp;";
					echo "&nbsp;&nbsp;&nbsp;";
					echo "$dados2[titulo]</option>";
					$sql3= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 2 and filho_de = $dados2[id]");
					while ($dados3=mysql_fetch_array($sql3)){
						echo "<option value='?pg=../estrutura/conteudo/cadastrar.php&lingua=$lingua&traducao_de=$dados3[id]&hierarquia=$dados3[hierarquia]';";
						if($traducao_de == "$dados3[id]"){echo " selected ";}
						echo ">&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "&nbsp;&nbsp;&nbsp;";
						echo "$dados3[titulo]</option>";
					}
				}
			} ?>
      </select><input name='traducao_de' type='hidden' id="traducao_de" value="<?=$traducao_de?>" size="45" /></td>
    </tr>
	<? if($traducao_de == 0){ ?>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Filho de:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="filho_de" style="width:280" id="filho_de">
            <option value="0" selected="selected">Menu pai (sem hierarquia)</option>
            <option value="0" >======================================</option>
            <?
                $sql= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 0 and lingua = '$lingua'");
                while ($dados=mysql_fetch_array($sql)){
                    echo "<option value='$dados[id]';>";
                    echo "$dados[titulo]</option>";
                    $sql2= mysql_query("SELECT * FROM conteudo_multilingue where hierarquia = 1 and filho_de = $dados[id]");
                    while ($dados2=mysql_fetch_array($sql2)){
                        echo "<option value='$dados2[id]';>";
                        echo "&nbsp;&nbsp;&nbsp;";
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
          <input name="clicavel" type="radio" id="clicavel" value="1" checked="checked" />
          Sim
          <input type="radio" name="clicavel" id="clicavel2" value="0" />
      N&atilde;o</label></td>
    </tr>
    <tr> 
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Título:</td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
        <strong> 
        <input name="titulo" type="text" value="" size="100" />
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Subtítulo:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <strong> 
        <input name="subtitulo" type="text" value="" size="100" />
        </strong></td>
    </tr>
    <tr> 
      <td align="right" valign="top" style="border-bottom:1px solid #cccccc">Texto:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <textarea name="texto" onkeyup=storeCaret(this); onclick=storeCaret(this); cols="80" rows="15" onselect=storeCaret(this);></textarea>      </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Imagem:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='foto01' type='file' size=30>      </td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cr&eacute;ditos:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='coment1' type='text' size=45 id="coment1">      </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Respons&aacute;vel:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <input name='responsavel' type='text' size=45 id="responsavel">      </td>
    </tr>
    <tr> 
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data:</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc"> <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td><strong> 
              <input name='data' type='text' value="<? echo date("d/m/Y")?>" size=12>
              </strong></td>
          </tr>
        </table></td>
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
