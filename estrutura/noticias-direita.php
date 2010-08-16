<div style="width:249px; margin-left:510px; position:absolute; height:525px; top:225px; " class="texto">
    <a href="?pg=videos"><img src="images/tit-hoje-peq.png" border="0"  ></a>
	<div style="width:249px;  background:url(images/fundoconteudo2.png) repeat-y; *margin-top:-3px " class="texto">
        <div style="text-align:left;">
            <?	$num = mt_rand(0, 0); // define que os ultimos filmes de posicao 0, 1 e 2 estarão visiveis
                if($num == 0){$num2 = $num+1;} else {$num2 = $num;}
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM  filmes_dados where destaque = 1 and title = 1 order by id desc limit $num,$num2")); ?>
            <p style="padding:0px; margin:0px; "><?
                $video = $dados[trailer];
                $video = str_replace("<object","<object style='width:200px; height:150px; margin-top:5px;'",$video);
                $video = str_replace("http://<object","<object",$video);
                $video = str_replace("<embed","<embed style='width:200px; height:150px; margin-top:5px;'",$video);
                $video = str_replace("http://<embed","<embed",$video);
                echo $video;
            ?></p>
        </div>
    </div>
    <img src="images/rodapeconteudo2.png"><br />

</div>