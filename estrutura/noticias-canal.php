<div style="width:526px;  background:url(images/fundoconteudo.png) repeat-y; padding-top:20PX;" class="texto">
	<div style="width:450px; padding-left:10px;">
<?
	$dados = mysql_fetch_array(mysql_query("SELECT * FROM noticias_categorias where id = $_GET[cat]"));
	$cat1 = $dados[id]; $nome1 = $dados[nome]; $cor1 = $dados[cor];
?>
	<div  class="titulozinhos" style="border-bottom:1px solid <?=$cor1?>; color: <?=$cor1?>; margin-bottom:15px;"><?=$nome1?></div>

<?
	$sql= mysql_query("SELECT * FROM noticias_dados where idcat= $_GET[cat] order by id desc limit 0,6");
	while ($dados=mysql_fetch_array($sql)){ ?>
	<div style="min-height:90px;"  class="textinhos">
        <a href="?pg=noticia&id=<?=$dados[id]?>" style="display:block;">
            <? 
            if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]' align='left' style='border:solid 1px gray; margin-right:5px;'>" ;
            } else {
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/logo70.jpg' align='left' style='margin-right:5px; border:none;'>" ;
            }
			if($dados[texto] <> ""){
				$contatamanho = strlen($dados[texto]);
				$quantidade = 0;
				if($contatamanho > $quantidade){
					$texto = substr_replace($dados[texto], "...", $quantidade, $contatamanho - $quantidade);
				} else {
					$texto = "$dados[texto]";
				}
			}
			$data = explode("-",$dados[data]);
			$data = "$data[2].$data[1].$data[0]";
			?>
            <span style="font-size:10px; color: #0C9"><?=$data?></span><br />

            <span style="font-size:12px; color:black"><b><?=$dados[titulo]?></b></span>
            <?
            echo $texto;
        ?></a>
	</div>
	<? } ?>
	</div>
</div>
