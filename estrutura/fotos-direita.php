<div style="width:249px; margin-left:510px; position:absolute; height:525px; top:<? if($posicao > 0){echo $posicao;} else {echo "225";} ?>px; " class="texto">
    <img src="images/tit-nossas-fotos.png"><br />
	<div style="width:249px;  background:url(images/fundoconteudo2.png) repeat-y; " class="texto">
    	<div style="overflow:auto; height:<? if($altura > 0){echo $altura;} else {echo "400";} ?>px; width:215px;"><??>
        <DIV style="min-height:100px;"> <!-- bug ie7 -->
			<?
                $sql2= mysql_query("SELECT * FROM fotos_galerias order by rand()");
                while ($dados2=mysql_fetch_array($sql2)){
            ?>
                <div class="titulozinhos" style="padding-top:15px; border-bottom:1PX SOLID #a70d6f; width:195PX; font-size:12px;"><a style="color:#a70d6f"><?=$dados2[nome]?></a></div>
                <div style="padding-top:15px; width:195PX; text-align:center">
                    <?
                        $sql3= mysql_query("SELECT * FROM fotos where codigo = $dados2[id] order by rand() desc limit 0,1");
                        while ($dados3=mysql_fetch_array($sql3)){
                                if (is_file("images/fotos/$dados3[image]")){
                                    $foto="thumbs.php?w=140&h=78&imagem=images/fotos/$dados3[image]";
                                }
                    ?>
                        <a href="?pg=fotos2&id=<?=$dados3[id]?>" style="padding-right:10px"><img alt="<?=$dados3[coment]?>" src="<?=$foto?>" border="0"></a>
                    <? } ?>
                </div>
            <? } ?>
            </DIV>
		</div>
    </div>
    <img src="images/rodapeconteudo2.png"><br />

</div>