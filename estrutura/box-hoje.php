<div style="width:385px; height:296px; margin-left:0px;  float:right; ">
	<a href="?pg=videos"><img src="images/hoje-box.png" border="0" style="margin-left:20px; margin-top:15px;"></a>
    <div style="text-align:center;">
        <?	$num = mt_rand(0, 0); // define que os ultimos filmes de posicao 0, 1 e 2 estarão visiveis
            if($num == 0){$num2 = $num+1;} else {$num2 = $num;}
        $dados = mysql_fetch_array(mysql_query("SELECT * FROM  filmes_dados where destaque = 1 order by id desc limit $num,$num2")); ?>
        <p style="padding:0px; margin:0px; margin-top:5px; "><?
            $video = $dados[trailer];
            $video = str_replace("<object","<object style='width:340px; height:192px; margin-top:5px;'",$video);
            $video = str_replace("http://<object","<object",$video);
            $video = str_replace("<embed","<embed style='width:340px; height:192px; margin-top:5px;'",$video);
            $video = str_replace("http://<embed","<embed",$video);
            echo $video;
        ?></p>
    </div>
</div>
