<?
	$id = $_GET[id];
	$dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_dados where id = $id"));
//	$dados2 = mysql_fetch_array(mysql_query("SELECT * FROM noticias_categorias where id = $dados[idcat]"));
//	$cat1 = $dados2[id];	$nome1 = $dados2[nome];	$cor1 = $dados2[cor];
	$nome1 = "V&iacute;deos - TV IBrasil";
	$cor1 = "green";
?>
<div class="titulozinhos"><a href="?pg=noticias&cat=<?=$cat1?>" style="color:<?=$cor1?>"><?=$nome1?></a></div>
<div style="border-top:1px solid <?=$cor1?>; padding:0px; margin:0px;" class="noticia">
    <h1 style="font-size:20px;"><?=$dados[titulo]?></h1>
    <h2 style="text-align:justify;"><?=$dados[sinopse]?></h2><br /></div>
<p style="padding:0px; margin:0px; margin-bottom:15px;"><?
    $video = $dados[trailer];
    $video = str_replace("425","450",$video);
    $video = str_replace("344","310",$video);
    $video = str_replace("480","450",$video);
    $video = str_replace("295","238",$video);
    $video = str_replace("295","238",$video);
    $video = str_replace("560","450",$video);
    $video = str_replace("340","233",$video);
    $video = str_replace("660","450",$video);
    $video = str_replace("405","233",$video);
    $video = str_replace("500","450",$video);
    $video = str_replace("445","450",$video);
    $video = str_replace("364","310",$video);
    $video = str_replace("500","450",$video);
    $video = str_replace("315","238",$video);
    $video = str_replace("315","238",$video);
    $video = str_replace("580","450",$video);
    $video = str_replace("360","280",$video);
    $video = str_replace("680","450",$video);
    $video = str_replace("425","233",$video);
    $video = str_replace("520","450",$video);
    $video = str_replace("http://<object","<object",$video);
    echo $video;
?></p>

	<div class="titulozinhos"><a style="color:<?=$cor1?>">Ficha T&eacute;cnica</a>
</div>
<div style="border-top:1px solid <?=$cor1?>; padding:0px; margin:0px;" class="textinho">
    <? if($dados[direcao] <> ""){echo "<b>Dire&ccedil;&atilde;o: </b>$dados[direcao]<br>";} ?>
    <? if($dados[atores] <> ""){echo "<b>Equipe: </b>".nl2br($dados[atores])."<br>";} ?>
    <? if($dados[genero] <> ""){echo "<b>G&ecirc;nero: </b>$dados[genero]<br>";} ?>
    <? if($dados[duracao] <> ""){echo "<b>Dura&ccedil;&atilde;o: </b>$dados[duracao]<br>";} ?>
    <? if($dados[site] <> ""){echo "<b>Site: </b><a href='$dados[site]' target='_blank'>$dados[site]</a><br>";} ?>
</div>

<? include "estrutura/video-comente.php"; ?>