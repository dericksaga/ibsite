<?

$id = $_GET[id];

	if($_GET[acao] == 'add'){
		$cantor = $_POST[cantor];
		if($cantor <> ""){
			$sql = mysql_query("INSERT INTO agenda_cantores VALUES (NULL,$id,$cantor)");
			echo "INSERT INTO agenda_cantores VALUES (NULL,$id,$cantor)";
		}
	}
	if($_GET[acao] == 'excluir'){
		$sql = mysql_query("DELETE FROM agenda_cantores where id=$cantor");
	}



$sql = mysql_query("SELECT * FROM agenda WHERE id='$id'");
while ($dados=mysql_fetch_array($sql)) {
$status = "$dados[status]";
?>

<h3>Cadastro de Cantores em Evento</h3>
<form action='?pg=../estrutura/agenda/cadastrar2.php&acao=add&id=<?=$id?>' method='post' enctype="multipart/form-data" name="form">
<input type="hidden" name="id" value="<? echo $id; ?>">

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr>
	  <? if($usernivel == "1") {?>
		<? } else {?>
<input name='categoria' type='hidden' size=45 value="1">
<? }?>
        <tr> 
          <td width="438" align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Titulo do Evento:</strong></td>
          <td width="337" valign="middle" style="border-bottom:1px solid #cccccc; font-size:12px;"> 
            <? echo $dados[titulo]?>            </td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">&nbsp;</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc; font-size:12px;">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc">Cantor:</td>
          <td valign="middle" style="border-bottom:1px solid #cccccc; font-size:12px;"><select name="cantor" style="width:290px" id="cantor">
              <? 
                $sql = mysql_query("SELECT * FROM cantores order by nome");
                while ($dados=mysql_fetch_array($sql)){
                ?>
              <option value="<?=$dados[id] ?>" >
                <?=$dados[nome] ?>
            </option>
              <? } ?>
            </select>          </td>
        </tr>
	  <? if($usernivel == "1") {?>
<? } else {?>
<input name='fotos_extras' type='hidden' size=45 value="<? echo $dados[fotos_extras];?>">
<? }?>
  </table>
      
  <br />
  <table align="center">
    <tr>
      <td width="436" colspan="2"><p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input type='submit' value='Adicionar' />
      </font></p></td>
    </tr>
  </table>
  </form>
<p>
  <? }?>
</p>
<h3 align="center">Cantores Cadastrados</h3>
<div align="center">
  <table cellspacing="0" cellpadding="0" width="70%" border="1" bordercolor="#999999">
    <tr>
      <td width="40%" align="center" valign="middle"><b>Cantor</b></td>
      <td width="15%" align="center" valign="middle"><b>Excluir</b></td>
    </tr>
    <? 
        $sql = mysql_query("SELECT * FROM agenda_cantores where id_agenda = $id");
        while ($dados=mysql_fetch_array($sql)){
        ?>
    <tr>
      <td align="center"><? 
        $sql2 = mysql_query("SELECT * FROM cantores where id = $dados[id_cantor]");
        $dados2=mysql_fetch_array($sql2);
		echo $dados2[nome];
        ?>      </td>
      <td align="center"><a href="?pg=../estrutura/agenda/cadastrar2.php&id=<?=$id?>&acao=excluir&cantor=<?=$dados[id]?>"> <img src="../images/admin/botao_drop.png" alt="Excluir Cantor" border="0" /> </a> </td>
      <? } ?>
    </tr>
  </table>
</div>
<p>&nbsp; </p>
