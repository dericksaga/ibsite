<div align="center" style="width:526px; ">
	<img src="images/tit-videos.png"><br />
</div>
<div style="width:526px;  background:url(images/fundoconteudo.png) repeat-y;" class="texto">
	<div style="width:480px;">
<?
	$sql= mysql_query("SELECT * FROM filmes_dados where id = $_GET[id] ");
	while ($dados=mysql_fetch_array($sql)){
        $sql2= mysql_query("SELECT * FROM filmes_categorias where id = $dados[title]");
        while ($dados2=mysql_fetch_array($sql2)){
    		echo "<div class='titulozinhos' style='padding-top:15px; margin-bottom:15px; width:200PX'><a style='color:#a70d6f'>$dados2[nome]</a></div>";
        }
		echo "<h1>$dados[titulo]</h1>";
		$video = $dados[trailer];
		$video = str_replace("<object","<object style='width:480px; height:270px; margin-top:5px;'",$video);
		$video = str_replace("http://<object","<object",$video);
		$video = str_replace("<embed","<embed style='width:480px; height:270px; margin-top:5px;'",$video);
		$video = str_replace("http://<embed","<embed",$video);
		echo $video;
	?>
    <? if($dados[direcao] <> "" or $dados[atores] <> "" or $dados[genero] <> "" or $dados[duracao] <> "" or $dados[site] <> ""){ ?>
        <div class="titulozinhos" style="padding-top:10px;"><a style="color:<?=$cor1?>">FICHA T&Eacute;CNICA</a></div>
            <div style="border-top:1px solid <?=$cor1?>; padding:0px; margin:0px;" class="textinho">
                <? if($dados[direcao] <> ""){echo "<b>Dire&ccedil;&atilde;o: </b>$dados[direcao]<br>";} ?>
                <? if($dados[atores] <> ""){echo "<b>Equipe: </b>".nl2br($dados[atores])."<br>";} ?>
                <? if($dados[genero] <> ""){echo "<b>G&ecirc;nero: </b>$dados[genero]<br>";} ?>
                <? if($dados[duracao] <> ""){echo "<b>Dura&ccedil;&atilde;o: </b>$dados[duracao]<br>";} ?>
                <? if($dados[site] <> ""){echo "<b>Site: </b><a href='$dados[site]' target='_blank'>$dados[site]</a><br>";} ?>
            </div>
	<? } ?>
    </div>
	<?
        $sql2= mysql_query("SELECT * FROM filmes_categorias where id = $dados[title]");
        while ($dados2=mysql_fetch_array($sql2)){
    ?>
    	<div class="titulozinhos" style="padding-top:15px; border-bottom:1PX SOLID #a70d6f; width:480PX"><a style="color:#a70d6f">VEJA MAIS DE <?=$dados2[nome]?></a></div>
        <div style="padding-top:15px; width:480PX; text-align:center">
			<?
                $sql3= mysql_query("SELECT * FROM filmes_dados where title = $dados[title] order by id desc");
                while ($dados3=mysql_fetch_array($sql3)){
                        if (is_file("images/filmes/$dados3[id]/$dados3[cartaz]")){
                        	$foto="thumbs.php?w=140&h=78&imagem=images/filmes/$dados3[id]/$dados3[cartaz]";
                        } else {
                        	$foto="images/logovideo.jpg";
                        }
						if($dados[id] == $dados3[id]){$borda = "border:5px solid #a70d6f;";}
            ?>
                <a href="?pg=video&id=<?=$dados3[id]?>" style="padding-right:10px"><img alt="<?=$dados3[titulo]?>" src="<?=$foto?>" border="0" style="margin-top:10px;<?=$borda;?>" align="absmiddle"></a>
            <? $borda = "";} ?>
		</div>
	<? }} ?>

</div>
<img src="images/rodapeconteudo.png"><br />

<? include "estrutura/videos-direita.php"; ?>