<?
if(empty($limite)){
$limite = 10;
}

if(empty($largura) AND empty($altura)){
$largura = 65;
$altura = 65;
}

$sql = mysql_query("SELECT * FROM noticias_dados where idcat='$idcat' order by id desc LIMIT $limite");
?>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
<tr>
  <td height="3" colspan="3"></td>
</tr>
<? while ($dados=mysql_fetch_array($sql)) {?>
  <TR valign="top"> 
  <TD width="1" valign="middle" background="images/layout/barrinha_divisao_vertical.gif"></TD>
  <TD valign="middle">
<?
$contatamanho = strlen($dados[subtitulo]);
$quantidade = 100;
if($contatamanho > $quantidade){
$subtitulo = substr_replace($dados[subtitulo], "...", $quantidade, $contatamanho - $quantidade);
} else {
$subtitulo = "$dados[subtitulo]";
}

/*if($dados[foto01] != "") {
echo "<a href='?pg=noticia&id=$dados[id]'><img align=left src='thumbs_fotos.php?w=$largura&h=$altura&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]'>
$dados[data]<BR><strong>$dados[titulo]</strong></a>";
} else{*/
echo "<a href='?pg=noticia&id=$dados[id]'>$dados[data]<BR><strong>$dados[titulo]</strong></a>";
//}?></TD>
<TD width="1" valign="middle" background="images/layout/barrinha_divisao_vertical.gif"></TD>
  </TR>
<tr>
  <td height="3" colspan="3"></td>
</tr>
<tr><td height="1" colspan="3" background="images/layout/barrinha_divisao_horizontal.gif"></td>
</tr>
<tr><td height="3" colspan="3"></td>
</tr>
<? }?>
</table>

