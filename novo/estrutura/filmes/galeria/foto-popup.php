<? include "../../config.php"; ?>

<script language="javascript">
var i=0;
function resize() {
  if (navigator.appName == 'Netscape') i=12;
  if (document.images[0]) window.resizeTo(document.images[0].width+12, document.images[0].height+61-i);
}
</script>

<body onload="resize();" leftmargin="5" topmargin="5">
<?
echo "<img src='thumbs_popup.php?imagem=$_GET[imagem]' border='0'>"; 
?>