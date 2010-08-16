<br />
<div  class="titulozinhos"><a href="?pg=videos" style="color:gray">CONFIRA</a></div>
<div style="border-top:1px solid <?=$cor1?>; padding:0px; margin:0px;">
    <?	$num = mt_rand(0, 2);
		if($num == 0){$num2 = $num+1;} else {$num2 = $num;}
    $dados = mysql_fetch_array(mysql_query("SELECT * FROM  filmes_dados where destaque = 1 order by id desc limit $num,$num2")); ?>
    <p style="padding:0px; margin:0px; margin-top:5px; "><?
		$video = $dados[trailer];
		$video = str_replace("425","280",$video);
		$video = str_replace("344","226",$video);
		$video = str_replace("480","280",$video);
		$video = str_replace("295","173",$video);
		$video = str_replace("295","173",$video);
		$video = str_replace("560","280",$video);
		$video = str_replace("340","170",$video);
		$video = str_replace("660","280",$video);
		$video = str_replace("405","170",$video);
		$video = str_replace("500","280",$video);
		$video = str_replace("445","280",$video);
		$video = str_replace("364","226",$video);
		$video = str_replace("500","280",$video);
		$video = str_replace("315","173",$video);
		$video = str_replace("315","173",$video);
		$video = str_replace("580","280",$video);
		$video = str_replace("360","170",$video);
		$video = str_replace("680","280",$video);
		$video = str_replace("425","170",$video);
		$video = str_replace("520","280",$video);
		$video = str_replace("http://<object","<object",$video);
		echo $video;
	?></p>
</div>