<?
include("../../config.php");

$id = $_GET[id];
$cidade = $_GET[cidade];
$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "images/eventos/$dados[id_franquia]/$dados[pasta]/";
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


/*******************************************************************
         Criação das Marca d' Água nas Fotos
*******************************************************************/

//DÁ A PERMISSÃO PARA ALTERAR AS FOTOS
@chmod("$dir$imagens[$i]", 0777);

//IMAGEM A SER ABERTA
$imagem  =  "$dir$imagens[$i]";
$loginho1 =  "images/loginho2.png";

//NOME DO ARQUIVO ORIGINAL
$imagem_gerada   =   explode(".", $imagens[$i]);
$imagem_gerada   =   $imagem_gerada[0].".jpg";
//echo $imagem_gerada;
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

$thumb="thumbs.php?w=320&h=240&imagem=";
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
     <td width="67%">Evento: <b><? echo "$dados[nome]";?></b></td>
     <td width="33%" align="right">Data: <b><? $data = explode("-", $dados[data]); echo "$data[2]/$data[1]/$data[0]";?></b></td>
   </tr>
 </table>
	<table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="320"  style="border:1px solid #999999;" height="242" align="center" valign="middle" background="images/img_carregando.gif"> <img src="<? echo "$thumb$dir$imagens[$i]";?>" border="0"></td>
    </tr></table>    
	<br><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
            <td>
<?
if ($page > 1){
   $pag=$page - 1;
   
if($page > 0 && $page < 16){      $pg2 = "0"; } 
if($page >= 16 && $page < 31){    $pg2 = "1"; } 
if($page >= 31 && $page < 46){    $pg2 = "2"; } 
if($page >= 46 && $page < 61){    $pg2 = "3"; } 
if($page >= 61 && $page < 76){    $pg2 = "4"; } 
if($page >= 76 && $page < 91){    $pg2 = "5"; } 
if($page >= 91 && $page < 106){   $pg2 = "6"; } 
if($page >= 106 && $page < 121){  $pg2 = "7"; } 
if($page >= 121 && $page < 136){  $pg2 = "8"; } 
if($page >= 136 && $page < 151){  $pg2 = "9"; } 
if($page >= 151 && $page < 166){  $pg2 = "10"; } 
if($page >= 166 && $page < 181){  $pg2 = "11"; } 
if($page >= 181 && $page < 196){  $pg2 = "12"; } 
if($page >= 196 && $page < 211){  $pg2 = "13"; } 
if($page >= 211 && $page < 226){  $pg2 = "14"; } 
if($page >= 226 && $page < 241){  $pg2 = "15"; } 
if($page >= 241 && $page < 256){  $pg2 = "16"; } 
if($page >= 256 && $page < 271){  $pg2 = "17"; } 
if($page >= 271 && $page < 286){  $pg2 = "18"; } 
if($page >= 286 && $page < 301){  $pg2 = "19"; } 
if($page >= 301 && $page < 316){  $pg2 = "20"; } 
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
            <td><img src="images/bt_im.gif" width="53" height="16" border="0"></td>
            <td><? if($page<$total) {
           $pagp=$page+1;
   echo "<a href=?id=$id&cidade=$cidade&page=" . ($pagp) . "><img src=`images/bt_av.gif` width=`53` height=`16` border=`0`></a>";
} else { echo "<img src=`images/bt_av.gif` width=`53` height=`16` border=`0`>";}
?></td>
        </tr>
    </table>	</td>
 </tr>
</table>
 

