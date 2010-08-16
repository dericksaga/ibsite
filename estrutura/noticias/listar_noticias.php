<?
$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM noticias_dados where id > 1 order by data desc ";
$palavra = "Novidade(s)";

$total_reg = "$qts_ultimos";

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
<table width="490" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> <table width="98%" align="center" cellpadding="0" cellspacing="0">
        <TR > 
          <TD colspan="2" align="center" style=" background:#eaedfc; padding:10px;">
<p style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px">Foram encontrados <strong><? echo "<b><font color=#2d386e>$tr</font></b>";?></strong> 
              <? echo $palavra?>!<br>
              Exibindo  de <b><font color=#2d386e><? echo $inicio+1?></font></b> 
              a <b><font color=#2d386e> 
              <? if($tp == $page){ echo $tr; } else { echo $inicio+$total_reg;}?>
              </font></b></p>          </TD>
        </TR>
		<tr><td colspan="2">&nbsp;</td></tr>
        <? while ($dados=mysql_fetch_array($limite)) {?>
        <TR onMouseOver="this.style.background='#eaedfc';" onMouseOut="this.style.background='';"> 
          <TD width="60" align="center" valign="middle" class="noticia" style="  border-bottom:solid 1px #eaedfc;"><? 
		  		if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
					echo "<img src='thumbs.php?w=200&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]' align='center' style='border:solid 1px gray;'>" ;
					}
					else {
					echo "<img src='images/logo45.jpg' border='$dados[borda]' align='center'>" ;
					}
				?>            </Td>
	      <TD align='justify' valign="top" style="  border-bottom:solid 1px #eaedfc; padding-left:10px;">
          	<a href="?pg=noticia&id=<?=$dados[id]?>" style="display:block; text-decoration: none;">

				<?  $sql2 = mysql_query("SELECT * FROM noticias_categorias where id = $dados[idcat]");
					$dados2=mysql_fetch_array($sql2);
					echo "<H3 STYLE='COLOR=GREEN;'>$dados2[nome]</H3></span> <br>";
					echo "<span class='noticia1' style='font-size=13px;'><b>$dados[titulo]</b></span> <br>";
						$contatamanho = strlen($dados[texto]);
						$quantidade = 500;
						if($contatamanho > $quantidade){
						$texto = substr_replace($dados[texto], "...", $quantidade, $contatamanho - $quantidade);
						} else {
						$texto = "$dados[texto]";
						}
						echo "<span class='noticia3'>$texto</span>";
				?>
                </a>          </Td>
        </TR>
        <tr> 
          <td height="3" colspan="3"></td>
        </tr>
        <tr> 
          <td height="1" colspan="3"></td>
        </tr>
        <tr> 
          <td height="3" colspan="3"></td>
        </tr>
        <? }?>
        <tr> 
          <TD colspan="2"> <br /><table border="0" align="center" cellpadding="0" cellspacing="0" >
              <TR> 
                <TD width="100" align="right" valign="top" class="fontemaior"> 
                  <?
if($page > 1){
$anterior = $page -1;
$url = "?pg=$pg&page=$anterior";
echo "<a href='$url'>« Anterior</a>&nbsp;|";
} else {
echo "<font color='$corcelula2'>« Anterior</font>&nbsp;|";
}
?>                </TD>
                <TD align="center" class="fontemaior"> 
                  <? 
for($x=1; $x<=$tp; $x++){
$url = "?pg=$pg&page=$x";
  if ($x==$page) {
  echo "<b>$x</b>|";
  } else {
  echo "<a href='$url'>$x</a>|";
  }
} 
?>                </TD>
                <TD width="100" align="left" valign="top" class="fontemaior"> 
                  <?
if($tp > $page){
$proxima = $page +1;
$url = "?pg=$pg&page=$proxima";
echo "&nbsp;<a href='$url'>Próxima »</a>";
} else {
echo "&nbsp;<font color='$corcelula2'>Próxima »</font>";
}
?>                </TD>
              </TR>
            </table></TD>
        </tr>
      </table>
      <? } else {?>
      <BR> <table align="center" cellpadding="0" cellspacing="0">
        <TR> 
          <TD align="center" valign="bottom"> <br> <br> <br> <br>
            Nenhum(a) <b><? echo $palavra?></b> encontrado(a) em <br>
            nosso banco de dados!<br> <br> <br> </td>
        </tr>
      </table>
      <? } ?></td>
  </tr>
</table>
