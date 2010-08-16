<?
$pg= $_GET[pg];
include "config.php";
if(empty($pg)) { $pg= "principal"; }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<TITLE>IbrasilTV - Not&iacute;cias, TV Online e muita informa&ccedil;&atilde;o</TITLE>
<META NAME="ROBOT" CONTENT="All">
<META NAME="RATING" CONTENT="general">
<META NAME="DISTRIBUTION" CONTENT="global">
<META NAME="LANGUAGE" CONTENT="PT">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.bgpos.js"></script>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background:#050028 url(images/fundo.jpg) left top;"><a name="topo"></a>
        <div style="width:955px; margin:auto; "> <!-- caixa principal -->
			<? include "estrutura/banner-1.php"; ?>
			<? include "estrutura/menu.php"; ?>
			<? include "query.php"; ?>
			<? include "estrutura/box-noticias.php"; ?>
			<? include "estrutura/box-hoje.php"; ?>
			<? //include "estrutura/programas.php"; ?>
			<? //include "estrutura/foto-dia.php"; ?>
			<? //include "estrutura/rodape.php"; ?>
        </div>
</body>
</html>