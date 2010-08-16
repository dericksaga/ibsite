<? include("../config.php");
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
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

<!--<div id="Layer1" style="position:absolute; left:4px; top:8px; z-index:1;"><img style="filter: alpha(Opacity=10);" src="<? echo "images/$loginho";?>"></div>-->
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

$thumb="thumbs_zoom.php?imagem=";
?>
<div id="Layer1" style="position:absolute; left:265px; top:183px; z-index:1;"><img src="<? echo "images/$loginho";?>" style="filter: alpha(Opacity=50);"></div>
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
          <td width="320" height="242" align="center" valign="middle" background="../images/layout/img_pagina_zoom_carregando.gif"> <img src="<? echo "$thumb$dir$imagens[$i]";?>" border="0"></td>
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
</body> 

