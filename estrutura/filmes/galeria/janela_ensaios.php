<?
include("../../conexao.php");
$id = $_GET[id];
$cidade = $_GET[cidade];
$page = $_GET[page];

$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "images/galeria/$dados[pasta]/";
$fundo = "../../images/eventos/$dados[id_franquia]/$dados[pasta]/fundo/$dados[fundo]";
?>
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
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td background="<?=$fundo?>" style="border:1px solid #003366;"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="155" height="315" align="center" valign="top"><br>
          <br>
          <br>
          <br>          
          <br>
          <br>          
          <br>
          <br>
          <table width="85%"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><a href="perfil.php?id=<?=$id?>" target="exibe_fotos"><b>&bull; P E R F I L</b></a></td>
            </tr>
            <tr>
              <td><a href="janela_ensaios.php?id=<?=$id?>&cidade=<?=$cidade?>" target="_top"><b>&bull; F O T O S</b></a></td>
            </tr>
          </table>
          <br>
          <? include("fotos_ensaios.php");?></td>
        <td width="400" valign="top"><iframe allowtransparency="true" width="335" height="305" frameborder="0" marginheight="0" marginwidth="0" name="exibe_fotos" scrolling="auto" src="zoom_ensaios.php?id=<? echo $id?>&cidade=<? echo $cidade?>&page=<? if(empty($page)){ echo 1;} else { echo $page; }?>"></iframe>
    <? // include("zoom.php");?>
<div align="right"><h4><?=$dados[nome];?>&nbsp;&nbsp;&nbsp;</h4></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="555"  border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td colspan="3" align="right">&reg;2005 - PortalTop.com.br - Todos direitos reservados - Desenvolvido por: <a href="http://sandro.jump.art.br" target="_blank"><b>Sandro Porto</b></a>&nbsp;</td>
        </tr>
</table>
