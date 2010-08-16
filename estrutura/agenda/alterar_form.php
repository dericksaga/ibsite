<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM agenda WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
?>

<h3>Alteração de Conte&uacute;do</h3>
<form action='?pg=../estrutura/agenda/alterar_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td width="775" colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">T&iacute;tulo do Evento:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <input name="titulo" type="text" value="<?=$dados[titulo]?>" size="34" />
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Local:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <input name="local" type="text" id="local" value="<?=$dados[local]?>" size="34" />
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Endere&ccedil;o:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <input name="endereco" type="text" value="<?=$dados[endereco]?>" size="34" id="endereco" />
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Data (Dia / M&ecirc;s / Ano):</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
          <? $dados3=explode("-",$dados[data]);
			 $dados4=explode(":",$dados[hora]); ?>
            <input name="dia" type="text" value="<?=$dados3[2]?>" size="2" maxlength="2" style="text-align:center;" id="dia" />
            /
            <input name="mes" type="text" value="<?=$dados3[1]?>" size="2" maxlength="2" style="text-align:center;" id="mes" />
            /
            <input name="ano" type="text" value="<?=$dados3[0]?>" size="4" maxlength="4" style="text-align:center;" id="ano" />
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Hora (Hora : Min):</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <input name="hora" type="text" value="<?=$dados4[0]?>" size="2" maxlength="2" style="text-align:center;" id="hora" />
            :
            <input name="minuto" type="text" value="<?=$dados4[1]?>" size="2" maxlength="2" style="text-align:center;" id="minuto" />
          </strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Outras informa&ccedil;&otilde;es:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc"><strong>
            <textarea name="outras" cols="34" rows="6" id="outras"><?=$dados[outras]?></textarea>
          </strong></td>
        </tr>
        
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
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
<? }?>