<body style="background-color:transparent" topmargin="0" leftmargin="0">

 <div id="Layer1" style="position:absolute; left:5; top:275; width:23; height:20; z-index:1"><a href="javascript:close()"><img src="../../images/layout/img_icone_fechar.gif" alt="Fechar" width="23" height="20" border="0"></a></div>
 <? include("../../config.php")?>
 <script src="../../janelas_popup.js" language="JavaScript"></script>


<!--<div id="Layer1" style="position:absolute; left:7px; top:7px; z-index:1;filter: alpha(Opacity=60);"><img src="<? echo "../images/loginho.png";?>"></div>-->
<?
$pg=$_GET[pg];
$dir=$_GET['dir'];
$foto=$_GET[foto];
/*if(!isset($pg) ){
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
for ($i = $inicio; $i < ($inicio + $ipp); $i++)*/
$thumb="thumbs_fotos.php?imagem=";
?>

<table width="400" border="0" cellpadding="0" cellspacing="0" background="<? echo "$thumb$dir$foto";?>">
  <tr>
    <td height="265"></td>
 </tr>

 <tr>
    <TD height="35" align="right" bgcolor="#FFFFFF" style="filter: alpha(Opacity=60);"> 
      <table border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="70" align="right" valign="middle">
            <strong> 
            <? /*
if ($pg > 1){
   $pag=$pg - 1;
  echo "<a href=\"?dir=$dir&pg=" . ($pag) . "$var1\">&laquo; Anterior</a>&nbsp;";
   } else { echo "<font color=#999999>&laquo; Anterior</font>&nbsp;";}
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
/*    echo "<script language=JavaScript>
     window.open('fotos.php?dir=$dir&pg=".($div)."$var1', 'fotos');
      </SCRIPT>";
} 
*/
?>
            </strong></td>

          <td width="70" align="left" valign="middle"> <strong>
            <? /*if($pg<$total) {
           $pagp=$pg+1;
   echo "|&nbsp;<a href=\"?dir=$dir&pg=" . ($pagp) . "$var1\">Próxima &raquo;</a>";
} else { echo "|&nbsp;<font color=#999999>Próxima &raquo;</font>";}*/
?>
</strong></td>

          <td width="225" align="right" class="titulos"><? $texto = explode("/", $usite); echo $texto[2];?></td>
		  <td width="5"></td>
		  
        </tr>
      </table>
    <? /*
$div=$pag/12;
if (!strstr($div,'.'))
{
$inter=0;
}
   if (isset($inter) AND $div * 12 < $pg)
{
  /*  echo "<script language=JavaScript>
         window.open('fotos.php?dir=$dir&pg=$div$var1', 'fotos');
      </SCRIPT>"; 
} */
?>    </td>
</tr>
</table>
</body>