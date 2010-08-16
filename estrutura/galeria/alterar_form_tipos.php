<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM fotos_galerias WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Alteração de Galerias</h3>
<form action='?pg=../estrutura/galeria/alterar_tipos_db.php' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
<? }?>


        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Galeria:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc">            <input name='nome' type='text' id="nome" value="<? echo $dados[nome]?>" size=52><input name='id' type='hidden' id="nome" value="<? echo $id?>" size=52>            </td>
        </tr>
  </table>
      
  <table align="center">
    <tr> 
          <td width="436" colspan="2"> <p align="center">&nbsp;</p>
            <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <input type='submit' value='Alterar e Avan&ccedil;ar &gt;&gt;'>
      </font></p></td>
    </tr>
  </table>

</form>
<? }?>