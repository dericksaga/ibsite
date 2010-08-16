<?
include("path.php");

if (strstr($pg,".")== TRUE){
$pg=ceil($pg);
$pg=$pg-1;
}
if (!$pg==0)
{
$cont=$pg * $qts_thumbs;
} else {
$cont=0;
}

?>
 <SCRIPT language=JavaScript1.2>
function makevisible(cur,which){
if (which==0)
cur.filters.alpha.opacity=80
else
cur.filters.alpha.opacity=100
}
</SCRIPT> 
<body style="background-color:transparent">
<table cellpadding="0" cellspacing="0" border="0">
<tr><TD height="5"></TD></tr>
  <tr>
     
    <td width="265" height="282" valign="top"> 
      <?
$handle = opendir($dir);
$ext = "jpg";
$indice = 0;
$ipp = $qts_thumbs;

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
$inicio = $pg * $ipp;
$thumb="thumbs_fotos.php?imagem=";
$var1 = "&evento=$evento&data=$data&local=$local";

for ($i=$inicio; $i<($inicio+$ipp); $i++)
if($imagens[$i] != ""){
$cont=$cont+1; ?>
      <a href="zoom.php?dir=<? echo "$dir";?><? echo $var1?>&pg=<? echo "$cont";?>" target="exibe_foto"> 
      <img style="FILTER: alpha(opacity=100)" onmouseover="makevisible(this,0)" onmouseout="makevisible(this,1)" src="<? echo "$thumb$dir$imagens[$i]"; ?>" hspace="2" vspace="3" border="1"></a> 
      <? }?>
    </td>
 </tr>
<tr>
    <TD align="left" valign="top"> 
      <table width="97%" border="0" cellpadding="0" cellspacing="0" bgcolor="#4B6A8D" style="border:1px solid <? echo $cortexto?>">
        <tr valign="middle"> 
          <td width="30%" height="20"><font color="#FFFFFF" size="<? echo $tfonte?>" face="<? echo $fonte?>"><strong>&nbsp; 
            <? $total = ceil(count($imagens)); echo $total; ?>
             Fotos</strong></font></td>
          <td width="65%" align="right"><font color="#FFFFFF" size="<? echo $tfonte?>" face="<? echo $fonte?>"> 
            <strong> 
            <?
			echo "Pgs: ";
for($i=0; $i<$paginas; $i++){
$url = "?dir=$dir&pg=$i";
  if ($i==$pg) {
  echo "<font color='#CCCCCC'>".($i+1)."</font>&nbsp;";
  } else {
  echo "<a href='$url'><font color='#FFFFFF'>".($i+1)."</font></a>&nbsp;";
  }
} 
?>
            </strong></font></td>
</tr>
</table>
</td>
</tr>
</table>
</body>