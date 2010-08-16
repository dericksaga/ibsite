<?
//include("../../config.php");

$id = $_GET[id];
$cidade = 1;

$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "../../images/eventos/$dados[id_franquia]/$dados[pasta]/";

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

<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
     
    <td colspan="2" align="right" valign="top"> 
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="200" height="340" valign="top"><?
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
natcasesort($imagens);
reset($imagens);

$pagina = 1;
if ($_GET['pg'])
   $pagina = $_GET['pg'];

$paginas = ceil(count($imagens) / $ipp);
$inicio = $pg * $ipp;
$thumb="thumbs.php?w=60&h=60&imagem=";

for ($i=$inicio; $i<($inicio+$ipp); $i++)
if($imagens[$i] != ""){
$cont=$cont+1;
?>
<?
$z = "";
while($z < "$paginas") {
   $z++;
	if($pg == $z){
	$page = $ipp*$z+1;
	}
}
//echo $page;
?>
<a href="zoom.php?id=<? echo $id?>&cidade=<? echo $cidade?>&page=<? echo "$cont";?>" target="exibe_fotos"><img src="<? echo "$thumb$dir$imagens[$i]"; ?>" hspace="1" vspace="2" border="0" style="border:1px solid #999999;FILTER: alpha(opacity=100)" onmouseover="makevisible(this,0)" onmouseout="makevisible(this,1)"></a>
<!--<a href="javascript:Muda('<? echo "thumbs.php?w=320&h=240&imagem=$dir$imagens[$i]"; ?>','<? echo "$cont";?>')"> <img src="<? echo "$thumb$dir$imagens[$i]"; ?>" hspace="1" vspace="2" border="0" style="border:1px solid #999999;FILTER: alpha(opacity=100)" onmouseover="makevisible(this,0)" onmouseout="makevisible(this,1)"></a>-->
<? }?></td>
        </tr>
    </table></td>
 </tr>
 <tr><td height="5"></td></tr>
<tr>
    <TD valign="top"> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr valign="middle"> 
          <td width="30%" height="20" align="left" valign="top"><font color="#000000"><strong> 
            <? $total = ceil(count($imagens)); echo $total; ?>
          </strong>             Fotos</font></td>
          <td width="70%" align="right" valign="top"><font color="#000000"> <strong>
            <? 
			echo "Pgs: ";
			for($i=0; $i<$paginas; $i++){
$url = "?id=$id&cidade=$cidade&pg=$i";
  if ($i==$pg) {
  echo "<font color='#666666'>".($i+1)."</font> ";
  } else {
  echo "<a href='$url'><font color='#000000'>".($i+1)."</font></a> ";
  }
}
?>
          </strong>
		  
		  <? /*
		  $url = "?id=$id&cidade=$cidade";
		  if ($pg > 0){
		  $pg = $pg-1;
           echo "<a href='$url&pg=$pg'>&laquo;</a>";
           }
		   for ($i=1;$i<$paginas;$i++){
			if ($i-1 != $pg) { 
			echo "<a href='$url&pg=$i'>";
			} else { 
			echo "<span style='background-color: #0066CC;color: #FFFFFF'>&nbsp;";
			} 
			echo "<b>$i</b>&nbsp;</span></a>";
			}
			if ($pg < ($paginas-2)){
			$pg = $pg+1;
            echo "<a href='$url&pg=$pg'>&raquo;</a>";
			} */?>
		  </font></td>
	    </tr>
</table>    </td>
</tr>
</table>
