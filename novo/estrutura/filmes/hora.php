<? $cat = $_GET[cat];
   $id = $_GET[id];
   $nome = $_GET[nome];

	if($_GET[acao] == 'add'){
		$sala = $_POST[sala];
		$hora = $_POST[hora];
		$lingua = $_POST[lingua];
		if($hora <> ""){
			$sql = mysql_query("INSERT INTO filmes_horarios VALUES (NULL,'$id','$sala','$hora:00','$lingua')");
		}
	}
	if($_GET[acao] == 'excluir'){
		$sql = mysql_query("DELETE FROM filmes_horarios where id='$_GET[hora]'");
	}

?>

<form action="?pg=../estrutura/filmes/hora.php&id=<?=$id?>&nome=<?=$nome?>&acao=add" method="post"  onsubmit="return validate(this);" enctype="multipart/form-data">
<h3>
<p align="center"><strong>Cadastro de Hor&aacute;rios de filmes</strong></p>
<p>&nbsp;</p>
<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr> 
          <td width="140" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Filme:</strong></td>
          <td width="320" valign="middle" style="border-bottom:1px solid #cccccc"><b><?=$_GET[nome]?>&nbsp;</b></td>
    </tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Sala:</strong></td>
  <td valign="middle" style="border-bottom:1px solid #cccccc">
  	<b>
        <select name="sala" style="width:290px" id="bairro">
        <? 
        $sql = mysql_query("SELECT * FROM cinemas_salas order by nome");
        while ($dados=mysql_fetch_array($sql)){
        ?>
          <option value="<?=$dados[id] ?>" <? if($dados[id] == $sala){echo "selected";} ?>   ><?=$dados[nome] ?></option>
        <? } ?>
      	</select>
    </b>
  </td>
</tr>
<tr>
  <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Hora:</strong></td>
  <td valign="middle" style="border-bottom:1px solid #cccccc"><b>
    <input name="hora" type="text" size="5" maxlength="5" style="text-align:center" id="hora" />
  </b></td>
</tr>
<tr>
  <td colspan="2" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><div align="center"><strong>
    <label>
    <input type="radio" name="lingua" id="radio" value="1" <? if($lingua==1){ echo "checked";} ?> />
    </label>
    Dublado 
    <label>
    <input name="lingua" type="radio" id="radio2" value="0" <? if($lingua<>1){ echo "checked";} ?> />
    </label>
    Legendado</strong></div></td>
  </tr>
	        
</table>
<p>&nbsp;</p>
<table align="center">
        <tr> 
          <td width="436" colspan="2"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
              <input type='submit' value='Adiciona Hor&aacute;rio'>
              </font></p></td>
        </tr>
  </table>
</form>
<h3 align="center">Sessões Cadastradas</h3>
<div align="center">
  <table cellspacing="0" cellpadding="0" width="70%" border="1" bordercolor="#999999">
    <tr>
      <td width="40%" align="center" valign="middle"><b>Sala</b></td>
      <td width="20%" align="center" valign="middle"><b>Hora</b></td>
      <td width="25%" align="center" valign="middle"><b>Língua</b></td>
      <td width="15%" align="center" valign="middle"><b>Excluir</b></td>
    </tr>
        <? 
        $sql = mysql_query("SELECT * FROM filmes_horarios where id_filme = $id order by id_sala,lingua,hora");
        while ($dados=mysql_fetch_array($sql)){
        ?>
    <tr>
      <td align="center">
        <? 
        $sql2 = mysql_query("SELECT * FROM cinemas_salas where id = $dados[id_sala]");
        $dados2=mysql_fetch_array($sql2);
		echo $dados2[nome];
        ?>
      </td>
      <td align="center">
	  	<? echo substr("$dados[hora]", 0, 2).":".substr("$dados[hora]", 3, 2); ?>
      </td>
      <td align="center">
      	<? if($dados[lingua] == 0){echo "Legendado";}
		   else {echo "Dublado";}
	    ?>
      </td>
      <td align="center">
		<a href="?pg=../estrutura/filmes/hora.php&id=<?=$id?>&nome=<?=$nome?>&acao=excluir&hora=<?=$dados[id]?>">
        	<img src="../images/admin/botao_drop.png" alt="Excluir Horário" border="0" />
        </a>
    </td>
        <? } ?>


    </tr>
  </table>
</div>
