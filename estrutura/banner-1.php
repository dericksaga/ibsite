<div style="width:770px; height:75px; margin-top:5px; margin-left:0px; background:red;">
<div style="position:absolute;"><a href="index.php"><img src="images/logo.png" border="0" align="left";></a></div>
	<? 	$dt = date("Y-m-d");
		$dados = mysql_fetch_array(mysql_query("SELECT * FROM banners where tipo = 1 and datafinal>='$dt' order by rand() limit 1")); 
        if (is_file("images/banners/$dados[id]/$dados[foto01]")){
			echo "<a href='url.php?id=$dados[id]' target='_blank'><img src='thumbs.php?w=770&h=75&imagem=images/banners/$dados[id]/$dados[foto01]' border='0'></a>" ;
		} else {
			echo "<a href='?pg=anuncie'><img src='thumbs.php?w=770&h=75&imagem=images/anuncie.jpg' border='0'></a>";
        }
    ?>
</div>
