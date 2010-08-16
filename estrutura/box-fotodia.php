<div style="width:385px; height:296px; margin-left:0px;  float:right;">
	<a href="?pg=fotodia"><img src="images/fotodia-box.png" border="0" style="margin-left:20px; margin-top:15px;"></a>
    <div style="text-align:center;">
        <?	$num = mt_rand(0, 1); // define que as ultimas imagens, de posicao x,0 sejam visiveis
			$num = 0;
            if($num == 0){$num2 = $num+1;} else {$num2 = $num;}
        $dados = mysql_fetch_array(mysql_query("SELECT * FROM  fotos where fotodia = 1 order by id desc limit $num,$num2")); ?>
        <p style="padding:0px; margin:0px; margin-top:5px; " align="center">
			<?
				if (is_file("images/fotos/$dados[image]")){
					echo "<img src='thumbs.php?w=320&h=180&imagem=images/fotos/$dados[image]' border='0' style='border:solid 1px gray;'>" ;
				}
				$contatamanho = strlen($dados[coment]);
				$quantidade = 90;
				if($contatamanho > $quantidade){
					$texto = substr_replace($dados[coment], "...", $quantidade, $contatamanho - $quantidade);
				} else {
					$texto = "$dados[coment]";
				}
				echo "<div style='width:340px; padding-top:5px; text-align:center' class='texto'>$texto</div>";
	        ?>
		</p>
    </div>
</div>
