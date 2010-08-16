<div style="width:770px; height:75px; position:absolute; margin-top:5px; margin-left:0px; background:red;">
	<? 	$dt = date("Y-m-d");
		$dados = mysql_fetch_array(mysql_query("SELECT * FROM banners where tipo = 1 and datafinal>='$dt' order by rand() limit 1")); 
        if (is_file("images/banners/$dados[id]/$dados[foto01]")){
			echo "<a href='url.php?id=$dados[id]' target='_blank'><img src='thumbs.php?w=468&h=60&imagem=images/banners/$dados[id]/$dados[foto01]' border='0'></a>" ;
		} else {
			echo "<a href='?pg=anuncie'><img src='images/anuncie.jpg' border='0'></a>";
        }
    ?>
</div>