<body style="background-color:transparent">
<?
include("../../conexao.php");

$id = $_GET[id];
$cidade = $_GET[cidade];
$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "../../images/eventos/$dados[id_franquia]/$dados[pasta]/";
?>

<script src="../../janelas_popup.js" language="JavaScript"></script>
<?
if(!isset($page) ){
 $page=1;
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
if ($_GET['page'])
$pagina = $_GET['page'];
$paginas = ceil(count($imagens) / $ipp);
$total = ceil(count($imagens));
$inicio = $page * $ipp;
for ($i = $inicio; $i < ($inicio + $ipp); $i++)

//$thumb="thumbs.php?w=320&h=240&imagem="; //sem a logo
$thumb="thumbs2.php?w=320&h=240&imagem="; //com a logo
?>

<? 
$pg2 = ceil($paginas/$qts_thumbs);
//echo "$paginas/$qts_thumbs=$pg2<br>";

/*if($page == "16"){
$var = "1";
//echo "<meta http-equiv=\"refresh\" content=\"0;URL=janela.php?id=$id&cidade=$cidade&pg=$var\">";
    echo "<script>
     window.open('janela.php?id=$id&cidade=$cidade&pg=$var', '_top');
      </script>";
}

if($page < ($paginas-2)){
echo "
<script>
window.location = \"janela.php?id=$id&cidade=$cidade&pg=$var+1\";
return;
</script>
";
}
*/
//for ($i = $page; $i <= $page+14; $i++) {
?>
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


<b><font size="4">&nbsp;F O T O S</font></b>
<hr width="322" size="1" noshade color="#000000">

<table width="322" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td height="21">&nbsp;<i>Fotos por: <b><? echo "$dados[por]";?></b> </i></td>
     </tr>
 </table>
	<table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="320" height="240" align="center" valign="middle" background="images/img_carregando.gif"  style="border:1px solid #000000;"> <img src="<? echo "$thumb$dir$imagens[$i]";?>" border="0"><!--	  <div id="Layer1" style="position:absolute; z-index:1; width: 30; height: 31; left: 18px; top: 226px;"><a href="javascript:Amplia('foto-popup.php?imagem=<? echo "$dir$imagens[$i]";?>');"><img src="images/lupinha.gif" width="30" height="31" border="0"></a></div>
	--></td>
    </tr></table>    

<!--
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="5" height="7"></td></tr>
      <tr align="center">
            <td>
<?
if ($page > 1){
   $pag=$page - 1;
   
if($page > 0 && $page < 7){      $pg2 = "0"; } 
if($page >= 7 && $page < 13){    $pg2 = "1"; } 
if($page >= 13 && $page < 19){    $pg2 = "2"; } 
if($page >= 19 && $page < 25){    $pg2 = "3"; } 
if($page >= 25 && $page < 31){    $pg2 = "4"; } 
if($page >= 31 && $page < 37){    $pg2 = "5"; } 
if($page >= 37 && $page < 43){   $pg2 = "6"; } 
if($page >= 43 && $page < 49){  $pg2 = "7"; } 
if($page >= 49 && $page < 55){  $pg2 = "8"; } 
if($page >= 55 && $page < 61){  $pg2 = "9"; } 
if($page >= 61 && $page < 67){  $pg2 = "10"; } 
if($page >= 67 && $page < 73){  $pg2 = "11"; } 
if($page >= 73 && $page < 79){  $pg2 = "12"; } 
if($page >= 79 && $page < 85){  $pg2 = "13"; } 
if($page >= 85 && $page < 91){  $pg2 = "14"; } 
if($page >= 91 && $page < 97){  $pg2 = "15"; } 
if($page >= 97 && $page < 103){  $pg2 = "16"; } 
if($page >= 103 && $page < 109){  $pg2 = "17"; } 
if($page >= 109 && $page < 115){  $pg2 = "18"; } 
if($page >= 115 && $page < 121){  $pg2 = "19"; } 
if($page >= 121 && $page < 127){  $pg2 = "20"; } 
//echo $pg2;			
   
  echo "<a href=?id=$id&page=" . ($pag) . "><img src=`images/bt_vo.gif` width=`53` height=`16` border=`0`></a>";
   } else {
   echo "<img src=`images/bt_vo.gif` width=`53` height=`16`>";
   }
   
/*   
    $div=$page/$qts_thumbs;
for ($x=1;$x<99;$x++){
  if ($div==$x){
   $inter=0;
   break;
  }
}
if (isset($inter) AND $div * $qts_thumbs < $page){
if ($div==1){
 $div=0;
} else {
 $div=$div-1;
}
    echo "<script language=JavaScript>
     window.open('fotos.php?dir=$dir&page=".($div)."$var1', 'fotos');
      </SCRIPT>";
}
*/
?></td>
            <td><a href="javascript:indica('<? echo "indicacao.php?id=$id&cidade=$cidade&imagem=$imagens[$i]";?>');"><img src="images/bt_en.gif" width="53" height="16" border="0"></a></td>
            <td><a href="javascript:Comprar('<? echo "../pedidos/comprar_form.php?id=$id&cidade=$cidade&imagem=$imagens[$i]&page=$page";?>');"><img src="images/bt_co.gif" width="53" height="16" border="0"></a></td>
            <td><a href="javascript:AddAlbum('<? echo "../usuarios_vip/add_album_form.php?id=$id&imagem=$imagens[$i]";?>');"><img src="images/bt_ad.gif" width="53" height="16" border="0"></a></td>
            <td><? if($page<$total) {
           $pagp=$page+1;
   echo "<a href=?id=$id&cidade=$cidade&page=" . ($pagp) . "><img src=`images/bt_av.gif` width=`53` height=`16` border=`0`></a>";
} else { echo "<img src=`images/bt_av.gif` width=`53` height=`16` border=`0`>";}
?></td>
        </tr>
    </table>
	-->
	
	</td>
 </tr>
</table>
