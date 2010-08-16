<? include("../../config.php");
$local = $_GET[local];
$data = $_GET[data];
$evento = $_GET[evento];
?>

<body style="background-color:transparent">
<? 
$efeito = 12;
$tempo1 = 2;
$tempo2 = $tempo1+1;

//echo "<meta http-equiv='Page-Enter' content='blendTrans(Duration=$tempo2)'>";
//echo "<meta http-equiv='Page-Exit' content='blendTrans(Duration=$tempo1)'>";
/*
echo "<meta http-equiv='Page-Enter' content='revealTrans(Duration=$tempo1,Transition=$efeito)'>";
echo "<meta http-equiv='Page-Exit' content='revealTrans(Duration=$tempo1,Transition=$efeito)'>";
*/
?>

<script src="css/janelas_popup.js" language="JavaScript"></script>

<? $var1 = "&evento=$evento&data=$data&local=$local";?>

<?
if(!isset($pg) ){
 $pg=1;
}
$handle = opendir($dir);
$ext = "jpg";
$indice = 2;
$ipp = 1;

while (false !== ($file = readdir($handle)))
{
   $pathdata = pathinfo($file);
   if (!is_dir($file) && ($pathdata["extension"] == strtolower($ext)) || ($pathdata["extension"] == strtoupper($ext)))
   {
       $imagens[$indice] = $file;
       $indice++;
   }
}
natcasesort($imagens);
reset($imagens);
$pagina = 1;
if ($_GET['pg'])
$pagina = $_GET['pg'];
$paginas = ceil(count($imagens) / $ipp);
$total = ceil(count($imagens));
$inicio = $pg * $ipp;
for ($i = $inicio; $i < ($inicio + $ipp); $i++)

?>


    <?
  $res=getimagesize("$dir$imagens[$i]");
  if ($res[1]>270){
  $height=270;
  $width=($res[0]*$height)/$res[1];
  }  else {
  $height=$res[1];
  $width=$res[0];
  }
  $width=ceil($width);
  $height=ceil($height);
  ?>
    <?
/*******************************************************************
         Criação das Marca d' Água nas Fotos
*******************************************************************/

//DÁ A PERMISSÃO PARA ALTERAR AS FOTOS
@chmod("$dir$imagens[$i]", 0777);

//IMAGEM A SER ABERTA
$imagem  =  "$dir$imagens[$i]";
$loginho1 =  "images/loginho2.png";

//NOME DO ARQUIVO ORIGINAL
$imagem_gerada   =   explode(".", $imagem);
$imagem_gerada   =   $imagem_gerada[0].".jpg";

//CRIA UMA NOVA IMAGEM
$imagem_orig     =   imagecreatefromjpeg($imagem);
$imagem_marca1    =   imagecreatefrompng($loginho1);

//LARGURA
$pontoX          =   imagesx($imagem_orig);
$pontoX1         =   imagesx($imagem_marca1);
echo "Largura da Foto: <b>$pontoX</b> <BR>Largura da Loginho 1: <b>$pontoX1</b><br>
---------------------------------------------------------------<BR>
";
//ALTURA
$pontoY          =   imagesy($imagem_orig);
$pontoY1         =   imagesy($imagem_marca1);
echo "Altura da Foto: <b>$pontoY</b> <BR>Altura da Loginho 1: <b>$pontoY1</b><BR>
---------------------------------------------------------------<BR>
";
//POSIÇÃO DA LOGINHO 1
//$dest_x = 5;
$dest_x = $pontoX - $pontoX1 - 5;
$dest_y = $pontoY - $pontoY1 - 5;
echo "Largura da Foto - Largura da Loginho - 5: <b>$dest_x</b><br>
Altura da Foto - Altura da Loginho - 5: <b>$dest_y</b><br>";

//COPIA A IMAGEM ORIGINAL PARA DENTRO
imagecopymerge($imagem_orig, $imagem_marca1, $dest_x, $dest_y, 0, 0, $pontoX1, $pontoY1, 100);

//SALVA A IMAGEM
imagejpeg($imagem_orig, $imagem_gerada);

//LIBERA A MEMÓRIA
imagedestroy($imagem_orig);


$thumb="thumbs_zoom.php?imagem=";
?>


<table width="338" border="0" cellpadding="0" cellspacing="0">
<tr><td height="8" background="../images/layout/img_pagina_zoom_cima.png"></td>
</tr>
  <tr>
    <td valign="top" background="../images/layout/img_pagina_zoom_fundo.png">
	<table border="0" align="center" cellpadding="0" cellspacing="0">
	  <!--
        <tr>
          <td width="354" height="17" bgcolor="E7E7E7" style="border-bottom:1px solid <? echo $cortexto?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><? echo "&nbsp;<strong>Código</strong>: $imagens[$i]";?></font></td>
        </tr>
		-->
        <tr>
          <td width="320" height="242" align="center" valign="middle" background="../images/layout/img_pagina_zoom_carregando.gif"> <img src="<? echo "$thumb$imagem_gerada";?>" border="0"  height="<? print $height?>"></td>
    </tr></table>    </td>
 </tr>
 <tr><td height="8" background="../images/layout/img_pagina_zoom_fim.png"></td>
 <tr>
    <TD height="28" align="center" valign="middle"> 
      <table width="0" border="0" cellspacing="0" cellpadding="0">
	          <tr>
          <td align="center" background="../images/layout/img_pagina_zoom_fundo2.png"><table width="0" border="0" cellspacing="0" cellpadding="0">
            <tr valign="bottom">
              <td align="right"><font color="#000000"><strong>
                <?
if ($pg > 1){
   $pag=$pg - 1;
  echo "<a href=\"?dir=$dir&pg=" . ($pag) . "$var1\"><img src='../images/layout/img_pagina_zoom_bt1.png' border='0'></a>";
   } else { echo "<img src='../images/layout/img_pagina_zoom_bt1.png'>";}
    $div=$pg/$qts_thumbs;
for ($x=1;$x<99;$x++){
  if ($div==$x){
   $inter=0;
   break;
  }
}
if (isset($inter) AND $div * $qts_thumbs < $pg){
if ($div==1){
 $div=0;
} else {
 $div=$div-1;
}
    echo "<script language=JavaScript>
     window.open('fotos.php?dir=$dir&pg=".($div)."$var1', 'fotos');
      </SCRIPT>";
}

?>
              </strong></font></td>
              <td width="120" height="38" align="center"><strong><a href="javascript:indica('<? echo "indicacao.php?dir=$dir&imagem=$imagens[$i]$var1";?>');"><font color="#000000"><strong><img src="../images/layout/img_pagina_zoom_bt2.png" width="102" height="29" border="0"> </strong></font></a></strong></td>
              <td align="left"><strong>
                <? if($pg<$total) {
           $pagp=$pg+1;
   echo "<a href=\"?dir=$dir&pg=" . ($pagp) . "$var1\"><img src='../images/layout/img_pagina_zoom_bt3.png' border='0'></a>";
} else { echo "<img src='../images/layout/img_pagina_zoom_bt3.png'>";}
?>
              </strong></td>
            </tr>
          </table>
            <?
$div=$pag/$qts_thumbs;
if (!strstr($div,'.'))
{
$inter=0;
}
   if (isset($inter) AND $div * $qts_thumbs < $pg)
{
    echo "<script language=JavaScript>
         window.open('fotos.php?dir=$dir&pg=$div$var1', 'fotos');
      </SCRIPT>";
}
?></td>
        </tr>
        <tr>
          <td><img src="../images/layout/img_pagina_zoom_fim2.png" width="338" height="8"></td>
        </tr>
      </table>      </td>
</tr>
</table>
<br>
<br>




<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td> 
  <table width="365" height="247" border="0" cellpadding="0" cellspacing="1" bgcolor="<? echo $cortexto?>">
    <?
  $res=getimagesize("$dir$imagens[$i]");
  if ($res[1]>270){
  $height=270;
  $width=($res[0]*$height)/$res[1];
  }  else {
  $height=$res[1];
  $width=$res[0];
  }
  $width=ceil($width);
  $height=ceil($height);
  ?>
    <?
/*******************************************************************
         Criação das Marca d' Água nas Fotos
*******************************************************************/

//DÁ A PERMISSÃO PARA ALTERAR AS FOTOS
@chmod("$dir$imagens[$i]", 0777);

//IMAGEM A SER ABERTA
$imagem  =  "$dir$imagens[$i]";
$loginho1 =  "images/loginho2.png";

//NOME DO ARQUIVO ORIGINAL
$imagem_gerada   =   explode(".", $imagem);
$imagem_gerada   =   $imagem_gerada[0].".jpg";

//CRIA UMA NOVA IMAGEM
$imagem_orig     =   imagecreatefromjpeg($imagem);
$imagem_marca1    =   imagecreatefrompng($loginho1);

//LARGURA
$pontoX          =   imagesx($imagem_orig);
$pontoX1         =   imagesx($imagem_marca1);
echo "Largura da Foto: <b>$pontoX</b> <BR>Largura da Loginho 1: <b>$pontoX1</b><br>
---------------------------------------------------------------<BR>
";
//ALTURA
$pontoY          =   imagesy($imagem_orig);
$pontoY1         =   imagesy($imagem_marca1);
echo "Altura da Foto: <b>$pontoY</b> <BR>Altura da Loginho 1: <b>$pontoY1</b><BR>
---------------------------------------------------------------<BR>
";
//POSIÇÃO DA LOGINHO 1
//$dest_x = 5;
$dest_x = $pontoX - $pontoX1 - 5;
$dest_y = $pontoY - $pontoY1 - 5;
echo "Largura da Foto - Largura da Loginho - 5: <b>$dest_x</b><br>
Altura da Foto - Altura da Loginho - 5: <b>$dest_y</b><br>";

//COPIA A IMAGEM ORIGINAL PARA DENTRO
imagecopymerge($imagem_orig, $imagem_marca1, $dest_x, $dest_y, 0, 0, $pontoX1, $pontoY1, 100);

//SALVA A IMAGEM
imagejpeg($imagem_orig, $imagem_gerada);

//LIBERA A MEMÓRIA
imagedestroy($imagem_orig);

?>
    <tr>
      <td align="center" valign="middle"> <img src="<? echo "$imagem_gerada";?>" border="0"  height="<? print $height?>"></td>
    </tr></table></td>
</tr>
<tr>
<TD height="42"> 
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top"> 
      <td width="70" align="center">
	  
        <font size="<? echo $tfonte?>" face="<? echo $fonte?>"> <strong>
        <?
if ($pg > 1){
$pag=$pg - 1;
echo "<a href=\"?dir=$dir&pg=" . ($pag) . "$var1\"><img src=\"images/icone_anterior.jpg\" border=0></a>";
} else { echo "<font color=$onmouseover><img src=\"images/icone_anterior.jpg\" border=0></font>";}
$div=$pg/12;
for ($x=1;$x<99;$x++){
if ($div==$x){
$inter=0;
break;
}
}
if (isset($inter) AND $div * 12 < $pg){
if ($div==1){
$div=0;
} else {
$div=$div-1;
}
echo "<script language=JavaScript>
 window.open('fotos.php?dir=$dir&pg=".($div)."$var1', 'fotos');
  </SCRIPT>";
}

?>
        </strong> </font></td>
      <td width="70" align="center"><a href="javascript:popup('imagempop.php?imagem=<? echo "$dir$imagens[$i]";?>');"><img src="images/icone_ampliar.jpg" border=0></a></td>
      <td width="70" align="center"><a href="javascript:imprimi('imprimir.php?imagem=<? echo "$dir$imagens[$i]";?><? echo $var1?>');"><img src="images/icone_imprimir.jpg" border=0></a></td>
      <td width="70" align="center"><a href="javascript:indica('indicacao.php?dir=<? echo "$dir";?>&imagem=<? echo $imagens[$i]?><? echo $var1?>');"><img src="images/icone_enviar.jpg" border=0></a></td>
      <td width="70" align="center"> <strong><font size="<? echo $tfonte?>" face="<? echo $fonte?>"> 
        <? if($pg<$total) {
       $pagp=$pg+1;
echo "<a href=\"?dir=$dir&pg=" . ($pagp) . "$var1\"><img src=\"images/icone_proxima.jpg\" border=0></a>";
} else { echo "<font color=$onmouseover><img src=\"images/icone_proxima.jpg\" border=0></font>";}
?>
        </font></strong></td>
    </tr>
  </table>
<?
$div=$pag/12;
if (!strstr($div,'.'))
{
$inter=0;
}
if (isset($inter) AND $div * 12 < $pg)
{
echo "<script language=JavaScript>
     window.open('fotos.php?dir=$dir&pg=$div$var1', 'fotos');
  </SCRIPT>";
}
?>
</td>
</tr>
</table>
 

