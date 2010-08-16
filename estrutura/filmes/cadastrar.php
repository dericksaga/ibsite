<form action="?pg=../estrutura/filmes/cadastrar_db.php" method="post" enctype="multipart/form-data">
<h3>Cadastro de Filmes</h3>

<table width="450" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Programa:</td>
    <td valign="middle" style="border-bottom:1px solid #cccccc"><select name="categoria" style="width:280">
      <?
$sql= mysql_query("SELECT * FROM filmes_categorias order by id");
while ($dados=mysql_fetch_array($sql)){?>
      <option value="<? echo "$dados[id]";?>"><? echo "$dados[nome]";?></option>
      <? }?>
    </select></td>
  </tr> 

	      
		  <? if($usernivel == "1") {?>
<? } else {?>
<input name='id_franquia' type='hidden' size=45 value="<? echo $idfranquia?>">
<? }?>
        <tr>
              <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><b>Titulo:</b></td>
              <td width="320" valign="middle" style="border-bottom:1px solid #cccccc">                <input name="titulo" type="text" size="45" maxlength="255">              </td>
    </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='foto01' type='file' size="30" /></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Sinopse:</strong></td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <textarea name="sinopse" cols="36" rows="5" id="sinopse"></textarea>
          </strong></td>
        </tr>
	      <tr valign=middle>
            <td align="right" style="border-bottom:1px solid #cccccc"><b>Classifica&ccedil;&atilde;o:</b></td>
            <td style="border-bottom:1px solid #cccccc"><input name="classificacao" type="text" size="45" maxlength="255" id="classificacao" />                  </td>
    </tr>
		        <tr valign=middle>
		          <td align="right" style="border-bottom:1px solid #cccccc"><b>Site oficial:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><input name="site" type="text" id="site" value="http://" size="45" maxlength="255" />                  </td>
    </tr>
		        <tr valign=middle>
		          <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><b>V&iacute;deo:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><textarea name="trailer" cols="36" rows="4" id="trailer"></textarea></td>
    </tr>
		        <tr valign=middle>
		          <td align="right" style="border-bottom:1px solid #cccccc"><b>Atores / Pessoal / <br />
	              Entidade envolvida:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><strong>
		            <textarea name="atores" cols="36" rows="3" id="atores"></textarea>
		          </strong></td>
    </tr>
		        <tr valign=middle>
		          <td align="right" style="border-bottom:1px solid #cccccc"><b>Dire&ccedil;&atilde;o:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><input name="direcao" type="text" size="45" maxlength="255" id="direcao" />                  </td>
    </tr>
		        <tr valign=middle>
		          <td align="right" style="border-bottom:1px solid #cccccc"><b>G&ecirc;nero:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><input name="genero" type="text" size="45" maxlength="255" id="genero" />                  </td>
    </tr>
		        <tr valign=middle>
		          <td align="right" style="border-bottom:1px solid #cccccc"><b>Dura&ccedil;&atilde;o:</b></td>
		          <td style="border-bottom:1px solid #cccccc"><input name="duracao" type="text" size="45" maxlength="255" id="duracao" />                  </td>
    </tr>
		        <tr>
		          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto:</td>
		          <td valign="middle" style="border-bottom:1px solid #cccccc"><input name='foto01' type='file' size="30" id="foto01" /></td>
    </tr>
		        <tr valign=middle>
		          <td colspan="2" align="right" style="border-bottom:1px solid #cccccc"><div align="center"><b>Destaque? 
		            <label>
		            <input name="destaque" type="radio" id="destaque" value="1" checked="checked" />
		            sim</label>
		          </b><b>
                  <label>
                  <input type="radio" name="destaque" id="destaque2" value="0" />
                  n&atilde;o                  </label>
                  </b></div></td>
    </tr>
  </table>
<table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
    </tr>
  </table>
</form>