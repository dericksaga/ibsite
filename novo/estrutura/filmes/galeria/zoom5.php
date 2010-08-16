<? include("../config.php");
$local = $_GET[local];
$data = $_GET[data];
$evento = $_GET[evento];
?>
<script src="css/janelas_popup.js" language="JavaScript"></script>

<? $var1 = "&evento=$evento&data=$data&local=$local";?>

<meta http-equiv="Page-Enter" content="blendTrans(Duration=2)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=2)">

<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td> 
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

$pagina = 1;
if ($_GET['pg'])
$pagina = $_GET['pg'];
$paginas = ceil(count($imagens) / $ipp);
$total = ceil(count($imagens));
$inicio = $pg * $ipp;
for ($i = $inicio; $i < ($inicio + $ipp); $i++)
?>
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
$imagem1 =  "images/loginho2.png";
$imagem2 =  "images/loginho2.png";

//NOME DO ARQUIVO ORIGINAL
$imagem_gerada   =   explode(".", $imagem);
$imagem_gerada   =   $imagem_gerada[0].".jpg";

//CRIA UMA NOVA IMAGEM
$imagem_orig     =   imagecreatefromjpeg($imagem);
$imagem_marca1    =   imagecreatefrompng($imagem1);
$imagem_marca2    =   imagecreatefrompng($imagem2);

//LARGURA
$pontoX          =   imagesx($imagem_orig);
$pontoX1         =   imagesx($imagem_marca1);
$pontoX2         =   imagesx($imagem_marca2);

//ALTURA
$pontoY          =   imagesy($imagem_orig);
$pontoY1         =   imagesy($imagem_marca1);
$pontoY2         =   imagesy($imagem_marca2);

//POSIÇÃO DAS MARCAS//

//ESQUERDA - INFERIOR
$dest_x = 0;
$dest_y = $pontoY - $pontoY1;

//DIREITA - INFERIOR
$dest_x2 = 370;
$dest_y2 = 250;
//$dest_x2 = $pontoX - $pontoX1;
//$dest_y2 = $pontoY - $pontoY1;


//COPIA A IMAGEM ORIGINAL PARA DENTRO

imagecopymerge($imagem_orig, $imagem_marca1, $dest_x, $dest_y, 0, 0, $pontoX1, $pontoY1, 100);
imagecopymerge($imagem_orig, $imagem_marca2, $dest_x2, $dest_y2, 0, 0, $pontoX2, $pontoY2, 100);

//SALVA A IMAGEM
imagejpeg($imagem_orig, $imagem_gerada);

//LIBERA A MEMÓRIA
imagedestroy($imagem_orig);
?>
    <tr>
      <td height="15" bgcolor="#FFFF00"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><? echo "&nbsp;<strong>Código</strong>: $imagens[$i]";?></font></td>
    </tr>
    <tr>
      <td align="center" valign="middle"> <img src="<? echo "$imagem_gerada";?>" border="0"  height="<? print $height?>"></td>
    </tr></table>
</td>
</tr>
<tr>
<TD height="42"> 
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top"> 
      <td width="70" align="center"> <font size="<? echo $tfonte?>" face="<? echo $fonte?>"> 
        <strong> 
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
 

