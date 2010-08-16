<? include "../../conexao.php"; ?>

<script language="javascript">
var i=0;
function resize() {
  if (navigator.appName == 'Netscape') i=12;
  if (document.images[0]) window.resizeTo(document.images[0].width+12, document.images[0].height+61-i);
}
</script>

<body onLoad="resize();" leftmargin="0" topmargin="0">
<?
//echo "<img src='thumbs2.php?w=400&h=300&imagem=$_GET[imagem]' border='0'>"; 
echo "<img src='$_GET[imagem]' border='0'>"; 
?>