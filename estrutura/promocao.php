<div align="center" style="width:526px; ">
	<img src="images/tit-promocoes.png"><br />
</div>
<div style="width:526px;  background:url(images/fundoconteudo.png) repeat-y; padding-top:20PX;" class="texto">
    <div style="width:470px">
        <?
            $id = $_GET[id];
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM promocoes_dados where id = $id"));
        ?>
        <div style="padding:0px; margin:0px;" class="noticia">
            <h1><?=$dados[titulo]?></h1>
            <h2><?=$dados[subtitulo]?></h2>
            <div><?=$dados[fotos_extras]?><br /><br /></div>
            <?
            $dia = date("Y-m-d");
			if($dados[foto01] != "") {
				echo "<div align='center'><img src='thumbs.php?w=470&imagem=images/promocoes/$dados[id]/$dados[foto01]' style='padding-right:10px;'></div><br /><br />";
            }
            if($dia <= $dados[data]){
                echo "<div align='center'><a href='?pg=cadastro&promocao=$_GET[id]'><img src='images/cadastre-se.png' border='0'></a></div><br />";
            }
            ?>
        </div>
        <? include "estrutura/imprimir.php"; ?><br />
	</div>
</div>

<img src="images/rodapeconteudo.png"><br />

<? $altura = 255; $posicao = 225; include "estrutura/videos-direita.php"; ?>
<? include "estrutura/canais.php"; ?>
