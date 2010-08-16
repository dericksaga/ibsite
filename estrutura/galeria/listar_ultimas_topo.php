<?
if(empty($limite)){
$limite = 3;
}

if(empty($largura) AND empty($altura)){
$largura = 60;
$altura = 60;
}

$sql = mysql_query("SELECT * FROM noticias_dados where idcat='$idcat' order by id desc LIMIT $limite");
?>
<table width='100%' border='0' cellpadding='4' cellspacing='0'>
<? while ($dados=mysql_fetch_array($sql)) {?>
  <TR valign="top"> 
    <TD valign="middle">
<?
$contatamanho = strlen($dados[titulo]);
if(empty($quantidade)){
$quantidade = 110;
}
//$quantidade = 110;
if($contatamanho > $quantidade){
$titulo = substr_replace($dados[titulo], "...", $quantidade, $contatamanho - $quantidade);
} else {
$titulo = "$dados[titulo]";
}

$dados2=mysql_fetch_array(mysql_query("SELECT * FROM noticias_categorias where id='$dados[idcat]'"));

if($dados[foto01] != "") {
echo "<div class='textaobold2'><a href='?pg=noticia&id=$dados[id]'><img style='border:1px solid black;' align=left src='thumbs.php?w=$largura&h=$altura&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]'>
$dados2[nome]
<BR><div class='texto'>$titulo</div></a></div>";
} else{
echo "<div class='textaobold2'><a href='?pg=noticia&id=$dados[id]'>
$dados2[nome]
<BR><div class='texto'>$titulo</div></a></div>";
}?></TD>
  </TR>
<? }?>
</table>