<?

$id = $_GET[id];
$sql = mysql_query("SELECT * FROM noticias_categorias WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
?>

<h3>Altera��o de Conte&uacute;do</h3>




<script src="../js/mootools.v1.11.js" type="text/javascript"></script>

<link rel="stylesheet" href="../css/default_mooRainbow.css" type="text/css" /> 
<link rel="stylesheet" href="../css/demo3.css" type="text/css" /> 
<script src="../js/mooRainbow.js" type="text/javascript"></script> 
<script type="text/javascript"> 
	window.addEvent('load', function() {
		var ex1 = new MooRainbow('myRainbow', {
			'startColor': [58, 142, 246]
		});
 
		var ex2 = new MooRainbow('myRainbow2', {
			'id': 'mooRainbow2',
			'wheel': true,
			'startColor': [58, 142, 246],
			'onChange': function(color) {
				$('cor').value = color.hex;
			}
		});
 
	});
</script> 

<? $cat = $_GET[cat];?>
<form action='?pg=../estrutura/noticias/alterar_cat_db.php' method='post' enctype="multipart/form-data" name="form">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
    </tr>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='categoria' type='hidden' size=45 value="1">
    <? }?>
    <? if($usernivel == "1") {?>
    <? } else {?>
    <input name='fotos_extras' type='hidden' size=45 value="nao">
    <? }?>
    <tr>
      <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Categoria: </td>
      <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><strong>
        <input name='nome' type='text' id="nome" style="width:290px;" value="<?=$dados[nome]?>" />
      </strong></td>
    </tr>
    <tr>
      <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cor (hexadecimal):</td>
      <td valign="middle" style="border-bottom:1px solid #cccccc">
   <label> <img src="imgs/rainbow.png" alt="[r]" width="16" height="16" class="rain" id="myRainbow2" /> 
          <input name="cor" type="text" id="cor" value="<?=$dados[cor]?>" size="13" /> 
          </label>           <input name='id' type='hidden' size=45 value="<?=$dados[id]?>"><span style="color:<?=$dados[cor]?>">Cor atual</span></td>
    </tr>
  </table>
	  
	  
<p>&nbsp;</p>
<table align="center">
<tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Cadastrar'>
              </font></p></td>
        </tr>
      </table>
</form>



<? }?>