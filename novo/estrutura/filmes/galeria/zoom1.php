<?
include("../../config.php");

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

<table width="320" border="0" cellpadding="0" cellspacing="0">
<tr>
 <td colspan="5"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td width="67%">Evento: <b><? echo "$dados[nome]";?></b></td>
     <td width="33%" align="right">Data: <b><? $data = explode("-", $dados[data]); echo "$data[2]/$data[1]/$data[0]";?></b></td>
   </tr>
 </table>   </td>
</tr>
  <tr>
    <td valign="top">
	  <table border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>
          <td width="320" height="258" align="center" valign="middle" background="../images/layout/img_pagina_zoom_carregando.gif"> <img style="border:1px solid #999999;" src="<? echo "$thumb$dir$imagens[$i]";?>" id="ft"><br></td>
        </tr></table>    </td>
 </tr><tr>
    <TD align="center" valign="middle">    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
            <td><img src="images/bt_vo.gif" width="53" height="16"></td>
            <td><a href="javascript:indica('<? echo "indicacao.php?id=$id&cidade=$cidade&imagem=$imagens[$i]";?>');"><img src="images/bt_en.gif" width="53" height="16" border="0"></a></td>
            <td><img src="images/bt_co.gif" width="53" height="16"></td>
            <td><img src="images/bt_im.gif" width="53" height="16"></td>
            <td><a href="javascript:AddAlbum('<? echo "../usuarios_vip/add_album_form.php?id=$id&imagem=$imagens[$i]";?>');"><img src="images/bt_av.gif" width="53" height="16" border="0"></a> </td>
        </tr>
    </table></td>
</tr>
</table>
 

