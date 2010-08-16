
<?
$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM noticias_dados order by data desc";

$palavra = "Artigo(s)";

$total_reg = "3";

if(!$page){
$page = "1";
}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg);

if(mysql_num_rows($todos)>0){
?> 
<table width="98%" align="center" cellpadding="0" cellspacing="0">


<tr><td height="3" colspan="2"></td></tr>
<tr>
    <td height="1" colspan="2"></td>
  </tr>
<tr><td height="3" colspan="2"></td></tr>

<? while ($dados=mysql_fetch_array($limite)) {
?>
<TR>
    <TD align='left' valign="middle">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="8" valign="top" align="left"><img src="images/seta.gif" /></td>
			<td>
				<font class="verde"><a href=?pg=noticia&id=<? echo $dados[id]?>><? $data = explode("-",$dados[data]); echo "$data[2].$data[1].$data[0]"; ?></a></font><br />
				<font class="laranja">
					<a href=?pg=noticia&id=<? echo $dados[id]?>>
						<?
							$contatamanho = strlen($dados[titulo]);
							$quantidade = 49;
							if($contatamanho > $quantidade){
							$titulo = substr_replace($dados[titulo], "...", $quantidade, $contatamanho - $quantidade);
							} else {
							$titulo = "$dados[titulo]";
							}
							echo $titulo;
						?>
					</a>
				</font><br />
				<font class="branco">
					<a href=?pg=noticia&id=<? echo $dados[id]?>>
						<?
							$contatamanho = strlen($dados[texto]);
							$quantidade = 49;
							if($contatamanho > $quantidade){
							$texto = substr_replace($dados[texto], "...", $quantidade, $contatamanho - $quantidade);
							} else {
							$texto = "$dados[texto]";
							}
							echo $texto;
						?>
					</a>
				</font>
			</td>
		  </tr>
		</table>
	</Td>
</TR>
<tr><td height="3" colspan="2"></td></tr>
<tr><td height="1" colspan="2" style="padding-bottom:8px;"><img src="images/spacer.gif" /></td></tr>
<tr><td height="3" colspan="2"></td></tr>
<? }?>
</table>


<? } else {?>
<BR>
 
<table width="98%" align="center" cellpadding="0" cellspacing="0">
  <TR>
    <TD align="center" valign="bottom"> 
      <br>
      <br>
      <br>
      <br>
      Nenhuma <b><? echo $palavra?></b> encontrada em <br>
      nosso banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
