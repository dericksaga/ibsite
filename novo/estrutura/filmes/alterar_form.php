<?
$id = $_GET[id];

$sql = mysql_query("SELECT * FROM filmes_dados where id='$id'");
$dados=mysql_fetch_array($sql);
?>
<style type="text/css">
.sim {
	border: 1px solid #7F9DB9;
}
.nao {
	background-color: #CCCCCC;
	border: 1px solid #7F9DB9;
}
</style>

<form action="?pg=../estrutura/filmes/alterar_db.php" method="post" enctype="multipart/form-data" name="alterar">
<input type="hidden" name="id" value="<? echo $id; ?>"> 
 
<h3>Altera&ccedil;&atilde;o  de Filme</h3>

<table width="450" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><b>Titulo:</b></td>
    <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"><input name="titulo" type="text" value="<?=$dados[titulo]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr>
    <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Sinopse:</strong></td>
    <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
      <textarea name="sinopse" cols="36" rows="5" id="sinopse"><?=$dados[sinopse]?></textarea>
      </strong></td>
  </tr>
  <tr valign="middle">
    <td align="right" style="border-bottom:1px solid #cccccc"><b>Classifica&ccedil;&atilde;o:</b></td>
    <td style="border-bottom:1px solid #cccccc"><input name="classificacao" type="text" id="classificacao" value="<?=$dados[classificacao]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr valign="middle">
    <td align="right" style="border-bottom:1px solid #cccccc"><b>Site oficial:</b></td>
    <td style="border-bottom:1px solid #cccccc"><input name="site" type="text" id="site" value="<?=$dados[site]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr valign="middle">
    <td align="right" valign="top" style="border-bottom:1px solid #cccccc"><b>V&iacute;deo:</b></td>
    <td style="border-bottom:1px solid #cccccc"><textarea name="trailer" cols="36" rows="4" id="trailer"><?=$dados[trailer]?></textarea>
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
    <td style="border-bottom:1px solid #cccccc"><input name="direcao" type="text" id="direcao" value="<?=$dados[direcao]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr valign="middle">
    <td align="right" style="border-bottom:1px solid #cccccc"><b>G&ecirc;nero:</b></td>
    <td style="border-bottom:1px solid #cccccc"><input name="genero" type="text" id="genero" value="<?=$dados[genero]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr valign="middle">
    <td align="right" style="border-bottom:1px solid #cccccc"><b>Dura&ccedil;&atilde;o:</b></td>
    <td style="border-bottom:1px solid #cccccc"><input name="duracao" type="text" id="duracao" value="<?=$dados[duracao]?>" size="45" maxlength="255" />    </td>
  </tr>
  <tr valign="middle">
    <td colspan="2" align="right" style="border-bottom:1px solid #cccccc"><div align="center"><b>Destaque?
      <label>
        <input name="destaque" type="radio" id="destaque" value="1" <? if($dados[destaque] == 1){ echo 'checked';} ?> />
        sim</label>
      </b><b>
        <label>
          <input type="radio" name="destaque" id="destaque2" value="0" <? if($dados[destaque] == 0){ echo 'checked';} ?>/>
          n&atilde;o </label>
      </b></div></td>
  </tr>
  <? if($usernivel == "1") {?>
<? } else {?>
<input name='id_franquia' type='hidden' size=45 value="<? echo $idfranquia?>">
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