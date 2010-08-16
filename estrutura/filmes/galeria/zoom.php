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

if($dados[logo] == "S"){
$thumb="thumbs2.php?w=320&h=240&imagem=";
} else {
$thumb="thumbs.php?w=320&h=240&imagem=";
}
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


<table width="322" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td width="67%"><b><? echo "$dados[nome]";?></b></td>
     <td width="33%" align="right"><b><? $data = explode("-", $dados[data]); echo "$data[2]/$data[1]/$data[0]";?></b></td>
   </tr>
 </table>
	<table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="320"  style="border:1px solid #999999;" height="242" align="center" valign="middle" background="images/img_carregando.gif"> <div id="Layer1" style="position:absolute; z-index:1; width: 29; height: 29; left: 283px; top: 213px;"><a href="javascript:Amplia('foto-popup.php?imagem=<? echo "$dir$imagens[$i]";?>');"><img src="../../images/layout/lupinha.gif" width="29" height="29" border="0"></a></div>            <img src="<? echo "$thumb$dir$imagens[$i]";?>" border="0"></td>
    </tr></table>    
	</td>
  </tr>
</table>
