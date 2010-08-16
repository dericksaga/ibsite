<div align="center" style="width:526px; ">
	<img src="images/fotodia.png"><br />
</div>
<? if($_GET[cat] == ""){ include "estrutura/corpo-fotos.php"; } else {include "estrutura/fotos-canal.php";} ?>
<img src="images/rodapeconteudo.png"><br />

<? include "estrutura/noticias-direita.php"; ?>
<? $altura = 294; $posicao = 490; include "estrutura/videos-direita.php"; ?>