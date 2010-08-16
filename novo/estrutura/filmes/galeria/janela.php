<?
include("../../config.php");
$id = $_GET[id];
$cidade = $_GET[cidade];
$page = $_GET[page];

$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "images/galeria/$dados[pasta]/";
?>
<style type="text/css">
<!--
body {
	margin-left: 1px;
	margin-top: 1px;
	margin-right: 1px;
	margin-bottom: 1px;
	background-image: url(../../images/bg_body.gif);
}
-->
</style>

<!--
<script>
  function Muda(img,page)
  {
   ft.src = img;
   page = page;
  }  
  
  atual = page;
  function Proxima()
  {
    atual = atual + 1;
    eval("ft.src = 'images/"+ atual +".jpg'");
  }  
</script>-->



<table width="556" height="363"  border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
  <tr> 
    <td width="200" height="319" align="right" valign="top" bgcolor="#CCCCCC"> 
      <? include("fotos.php");?>    </td>
    <td><table width="100%" height="100%"  border="0" align="center" cellpadding="2" cellspacing="0">
        <tr> 
          <td height="100%" align="center">
<iframe width="325" height="288" frameborder="0" marginheight="0" marginwidth="0" name="exibe_fotos" scrolling="no" src="zoom.php?id=<? echo $id?>&cidade=<? echo $cidade?>&page=<? if(empty($page)){ echo 1;} else { echo $page; }?>"></iframe> 
            <? // include("zoom.php");?>          </td>
        </tr>
      </table>
      <br> </td>
  </tr>
</table>
