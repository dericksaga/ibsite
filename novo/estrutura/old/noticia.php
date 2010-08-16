<?
	$id = $_GET[id];
	$dados = mysql_fetch_array(mysql_query("SELECT * FROM noticias_dados where id = $id"));
	$dados2 = mysql_fetch_array(mysql_query("SELECT * FROM noticias_categorias where id = $dados[idcat]"));
	$cat1 = $dados2[id]; $nome1 = $dados2[nome]; $cor1 = $dados2[cor];
?>
<div class="titulozinhos"><a href="?pg=noticias&cat=<?=$cat1?>" style="color:<?=$cor1?>"><?=$nome1?></a></div>
<div style="border-top:1px solid <?=$cor1?>; padding:0px; margin:0px;" class="noticia">
    <h1><?=$dados[titulo]?></h1>
    <h2><?=$dados[subtitulo]?></h2>
	<?
	if($dados[foto01] != "") {
		echo "<div align='left' style='width:200px; background:whitesmoke; text-align:center;' >";
	if($dados[creditos_foto] != "") {
	echo "<font size='1'><b><i>$dados[creditos_foto]&nbsp;</i></b></font>";
	}
	if($dados[largura_foto] == ""){ $largura = 200;} else { $largura = $dados[largura_foto];}
	echo "</div><img src='thumbs.php?w=$largura&imagem=images/noticias/$dados[id]/$dados[foto01]' align='left' style='padding-right:10px;'>"; }
	$texto = $dados[texto];
	echo "<div align='justify'>$texto<br><br></div>";
	?>
</div>
<? include "estrutura/imprimir.php"; ?><br />

<? include "estrutura/noticia-comente.php"; ?>