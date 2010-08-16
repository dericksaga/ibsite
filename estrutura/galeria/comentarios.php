<?
if($_SERVER['REQUEST_METHOD'] == "GET"){
$id = $_GET[id];
$acao = $_GET[acao];
} else {
$id = $_POST[id];
$acao = $_POST[acao];
$nome = $_POST[nome];
$cidade = $_POST[cidade];
$data = date("Y-m-d H:i:s");
$comentarios = $_POST[comentarios];
}

if(empty($acao)){

$sql = mysql_query("SELECT * FROM noticias_comentarios WHERE id_noticia='$id'");
$total = mysql_num_rows($sql);
?>
<script language='javascript'>
function confirmaExclusao(aURL) {
if(confirm('Você tem certeza que deseja excluir?')) {
location.href = aURL;
}
}
</script>
<table width='100%' border='0' align="center" cellpadding='2' cellspacing="0">
      <tr>
      <td align="center"><strong><font size="4">Coment&aacute;rios
	  <? if($_GET[pg] != "noticia"){
	  $sql2 = mysql_query("SELECT * FROM noticias_dados WHERE id='$id'");
$dados2 = mysql_fetch_array($sql2);
	  echo "da Notícia<br><em>$dados2[titulo]</em>";}?></font></strong></td>
    </tr>
	<? while ($dados=mysql_fetch_array($sql)) {?>
    <tr>
      <td colspan="2" style="border-top:1px solid #99CCFF;border-left:1px solid #99CCFF;border-right:1px solid #99CCFF;"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td width="31%" background="images/layout/fundtab.gif">&nbsp;&nbsp;Nome: <? echo "<b>$dados[nome]</b>";?><br>            </td>
            <td width="30%" background="images/layout/fundtab.gif">Cidade: <? echo "<b>$dados[cidade]</b>";?> </td>
            <td width="39%" align="right" background="images/layout/fundtab.gif">Data:
              <? $data1 = explode(" ",$dados[data]);
			$data = explode("-", $data1[0]);
		echo "<b>$data[2]/$data[1]/$data[0]</b>";
		?></td>
          </tr>
        </table>
</td>
    </tr>
    <tr>
      <td colspan="2" style="border:1px solid #99CCFF;"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td width="96%"><div align="justify"><? echo nl2br("$dados[comentarios]");?> </div></td>
    <td width="4%" align="center">
	<? if($_GET[pg] != "noticia"){?>
	<a href="javascript:confirmaExclusao('?pg=../noticias/comentario_excluir_db.php&id=<? echo $dados[id]; ?>&id2=<? echo $id; ?>')">
	<img src="../images/admin/botao_drop.png" alt="Deletar Comentário" border="0">
	</a>
	<? }?>
	</td>
  </tr>
</table>
</td>
    </tr>

	    <tr>
      <td height="8" colspan="2"></td>
    </tr>
    <tr>
      <td height="1" colspan="2" background="images/layout/barrinha_divisao_horizontal.gif"></td>
    </tr>
    <tr>
      <td height="8" colspan="2"></td>
    </tr>
		<? }?>
</table>


  <form action="?pg=comentarios" method=post enctype="multipart/form-data" name=formMaker>
<input name="acao" type="hidden" value="add_comentario">
<input name="id" type="hidden" value="<? echo $id?>">

<table border="0" align="center" cellpadding="2" cellspacing="0"> 


<tr valign=middle> 
<td align=right style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc;">Nome:</td> 
<td width="300" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc;"> 
    <input name="nome" type="text" size="45"></td> 
</tr>
<tr valign=middle>
  <td align=right style="border-bottom:1px solid #cccccc">Cidade:</td>
  <td style="border-bottom:1px solid #cccccc">    <input name="cidade" type="text" size="30"></td>
</tr>
<tr valign=middle>
  <td align=right style="border-bottom:1px solid #cccccc">Coment&aacute;rios:</td>
  <td style="border-bottom:1px solid #cccccc"><textarea name="comentarios" cols="34" rows="5" id="comentarios"></textarea></td>
</tr>
<tr align="center" valign=middle>
  <td colspan="2"><input type=submit name=Submit value="Cadastrar">
    <input type=reset name=Submit2 value="Limpar"></td>
  </tr>
</table> 
</form> 

<? }

if($acao == "add_comentario"){
$sql = "INSERT INTO noticias_comentarios VALUES ('', '$id', '$nome', '$cidade', '$data', '$comentarios')";
$sql = mysql_query($sql);
//echo $sql;
echo "
<br>
<br>
<center><h4>Comentário enviado com Sucesso!</h4></center>
<meta http-equiv='refresh' content='0;URL=?pg=noticia&id=$id'>
";

}
?>
