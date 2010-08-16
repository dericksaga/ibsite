<?
$pg= $_GET[pg];
include "config.php";
if(empty($pg)) { $pg= "principal"; }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<TITLE>IbrasilTV - Not&iacute;cias, TV Online e muita
informa&ccedil;&atilde;o</TITLE>
<META NAME="ROBOT" CONTENT="All">
<META NAME="RATING" CONTENT="general">
<META NAME="DISTRIBUTION" CONTENT="global">
<META NAME="LANGUAGE" CONTENT="PT">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="css/styles.css" type="text/css"
	media="screen" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.bgpos.js"></script>
<script type="text/javascript" src="js/ibrasiltv_scripts.js"></script>

</head>
<?
$sql = mysql_query("SELECT * FROM conteudo_estrutura WHERE id=1");
while ($dados=mysql_fetch_array($sql)) {
	$cor = $dados[cor_fundo];
	$fundo = $dados[foto08];
	if($dados[exibicao] == "e"){$lado = "left top no-repeat";}
	if($dados[exibicao] == "d"){$lado = "right top no-repeat";}
	if($dados[exibicao] == "l"){$lado = "";}
}
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background:<?=$cor?> url(images/estrutura/1/<?=$fundo?>) <?=$lado?>;">
<a name="topo"></a>

<div id="box_principal" ><!-- caixa principal -->

<div id="banner1">
<a id ="iblogo" href="index.php"><img
	src="images/logo.png" alt="IBrasilTV" /></a>
<? 	$dt = date("Y-m-d");
$dados = mysql_fetch_array(mysql_query("SELECT * FROM banners where tipo = 1 and datafinal>='$dt' order by rand() limit 1"));
if (is_file("images/banners/$dados[id]/$dados[foto01]")){
	echo "<a href='url.php?id=$dados[id]' target='_blank'><img src='thumbs.php?w=770&h=100&imagem=images/banners/$dados[id]/$dados[foto01]' ></a>" ;
} else {
	echo "<a href='?pg=anuncie'><img src='thumbs.php?w=770&h=100&imagem=images/anuncie.jpg' ></a>";
}
?></div>


<? include "estrutura/banner-2.php"; ?>


<? include "estrutura/menu.php"; ?>
<div style="padding-top: 10px;"><? include "query.php"; ?></div>
<? if($_GET[pg] <> "noticia" and $_GET[pg] <> "noticias"){ ?>
<div style="padding-top: 10px; width: 770px;"><? include "estrutura/box-linha1.php"; ?></div>
<? } ?>
<div style="padding-top: 10px; width: 770px;"><? include "estrutura/box-linha2.php"; ?></div>
<? /**include "estrutura/rodape.php"; */?></div>
</body>
</html>
