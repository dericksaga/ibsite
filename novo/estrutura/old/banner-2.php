<? 	$dt = date("Y-m-d");

	$sql= mysql_query("SELECT * FROM banners where tipo = 2 and datafinal>='$dt' order by rand() limit 3");
	while ($dados=mysql_fetch_array($sql)){
		if (is_file("images/banners/$dados[id]/$dados[foto01]")){
			echo "<a href='url.php?id=$dados[id]' target='_blank'><img src='thumbs.php?w=180&imagem=images/banners/$dados[id]/$dados[foto01]' border='0'></a><br /><br />" ;
		} else {
			echo "<a href='?pg=anuncie'><img src='images/anuncie2.jpg' border='0'></a><br /><br />";
		}
	}
?>