<? 
$id = $_GET[id];
$sql = mysql_query("select * from filmes_categorias where id = '$id'");
$dados=mysql_fetch_array($sql);
?>
<style type="text/css">
<!--
.style1 {color: #999999}

.sim {}
.nao {}
</style>



<h3>Alteração de Categoria </h3> 

<form action="?pg=../estrutura/filmes/categoria_alterar_db.php" method=post enctype="multipart/form-data" name=formMaker> 
<input type=hidden name="id" value="<? echo $id; ?>"> 

<table width="440" border="0" align="center" cellpadding="2" cellspacing="0"> 
<tr><td colspan="2" align="right" style="border-bottom:1px solid #cccccc">&nbsp;</td>
</tr> 

<tr valign=middle> 
<td width="140" align=right style="border-bottom:1px solid #cccccc"><b>Categoria:</b></td> 
<td width="300" style="border-bottom:1px solid #cccccc">
<input name="nome" type="text" value="<? echo $dados[nome]; ?>" size="45">
</td>
</tr>

</table> 
<br>
 
<input type=submit value="Alterar"> 
<input type=reset value="Limpar">
</form>  

