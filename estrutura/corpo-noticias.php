<div style="width:526px;  background:url(images/fundoconteudo.png) repeat-y; padding-top:20PX;" class="texto">
	<div style="width:450px; padding-left:10px;">
<?
	$sql= mysql_query("SELECT * FROM noticias_dados order by id desc limit 0,6");
	while ($dados=mysql_fetch_array($sql)){ ?>
	<div style="min-height:90px;"  class="textinhos">
        <a href="?pg=noticia&id=<?=$dados[id]?>" style="display:block;">
            <? 
            if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]' align='left' style='border:solid 1px gray; margin-right:5px;'>" ;
            } else {
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/logo70.jpg' align='left' style='margin-right:5px; border:none'>" ;
            }
            $contatamanho = strlen($dados[subtitulo]);
            $quantidade = 160;
            if($contatamanho > $quantidade){
                $texto = substr_replace($dados[subtitulo], "...", $quantidade, $contatamanho - $quantidade);
            } else {
                $texto = "$dados[subtitulo]";
            }
			$data = explode("-",$dados[data]);
			$data = "$data[2].$data[1].$data[0]";
			?>
            <span style="font-size:10px; color: #0C9"><?=$data?></span><br />

            <span style="font-size:12px; color:black"><b><?=$dados[titulo]?></b></span>
            <?
            echo "<br>".$texto;
        ?></a>
	</div>
	<? } ?>
	</div>
</div>