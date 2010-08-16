<div style="width:526px;  background:url(images/fundoconteudo.png) repeat-y; min-height:560px" class="texto">
	<div style="width:480px;">
<?
	$sql= mysql_query("SELECT * FROM fotos where id = $_GET[id]");
	while ($dados=mysql_fetch_array($sql)){
        $sql2= mysql_query("SELECT * FROM fotos_galerias where id = $dados[codigo]");
        while ($dados2=mysql_fetch_array($sql2)){
    		echo "<div class='titulozinhos' style='padding-top:15px; margin-bottom:15px; width:200PX'><a style='color:#a70d6f'>$dados2[nome]</a></div>";
        }
				if (is_file("images/fotos/$dados[image]")){
					echo "<img src='thumbs.php?w=475&imagem=images/fotos/$dados[image]' border='0' style='border:solid 1px gray;'>" ;
				}
	?>
    <div align="center"><br /><?=$dados[coment]?></div>
    </div>
	<?
        $sql2= mysql_query("SELECT * FROM fotos_galerias where id = $dados[codigo]");
        while ($dados2=mysql_fetch_array($sql2)){
    ?>
    	<div class="titulozinhos" style="padding-top:15px; border-bottom:1PX SOLID #a70d6f; width:480PX"><a style="color:#a70d6f">VEJA MAIS FOTOS</a></div>
        <div style="padding-top:15px; width:480PX; text-align:center">
			<?
                $sql3= mysql_query("SELECT * FROM fotos where fotodia = 1 order by id desc");
                while ($dados3=mysql_fetch_array($sql3)){
                        if (is_file("images/fotos/$dados3[image]")){
                        	$foto="thumbs.php?w=140&h=78&imagem=images/fotos/$dados3[image]";
                        } else {
                        	$foto="images/logovideo.jpg";
                        }
						if($dados[id] == $dados3[id]){$borda = "border:5px solid #a70d6f;";}
            ?>
                <a href="?pg=fotodia2&id=<?=$dados3[id]?>" style="padding-right:10px"><img alt="<?=$dados3[coment]?>" src="<?=$foto?>" border="0" style="margin-top:10px;<?=$borda;?>" align="absmiddle"></a>
            <? $borda = "";} ?>
		</div>
	<? }} ?>

</div>

