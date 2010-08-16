<div align="center" style="width:526px; ">
	<img src="images/tit-noticias.png"><br />
</div>
<? if($_GET[cat] == ""){ include "estrutura/corpo-noticias.php"; } else {include "estrutura/noticias-canal.php";} ?>
<img src="images/rodapeconteudo.png"><br />

<? include "estrutura/noticias-direita.php"; ?>
<? $altura = 294; $posicao = 490; include "estrutura/videos-direita.php"; ?>
<? include "estrutura/canais.php"; ?>