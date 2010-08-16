<div align="center" style="width:775px;">
	<img src="images/tit-canais.png"><br />
</div>
<div style="width:775px; background:url(images/fundogrande.png) repeat-y;" class="texto">
	<div style="width:775px; ">

<table border='0' cellpadding='0' cellspacing='0' style="width:730px; padding-left:10px;"><tr><td valign="top" style="width:350px; padding-right:30px;">
<?
	$sql= mysql_query("SELECT * FROM noticias_categorias order by nome desc");
	$tr = mysql_num_rows($sql);
	$porcoluna = floor($tr/2);
	$sql= mysql_query("SELECT * FROM noticias_categorias order by nome desc limit 0,$porcoluna");
	while ($dados=mysql_fetch_array($sql)){
		$cat1 = $dados[id]; $nome1 = $dados[nome]; $cor1 = $dados[cor];
?>
    <div  class="titulozinhos"><a href="?pg=noticias&cat=<?=$cat1?>" style="color:<?=$cor1?>"><?=$nome1?></a></div>
        <? $dados = mysql_fetch_array(mysql_query("SELECT * FROM noticias_dados where idcat = $cat1 order by id desc limit 1")); ?>
    <div style="padding:0px; margin:0px; padding-top:2px; border-top:1px solid <?=$cor1?>; min-height:80px;" class="textinhos">
        <a href="?pg=noticia&id=<?=$dados[id]?>" style="display:block;">
            <? 
            if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/noticias/$dados[id]/$dados[foto01]' align='left' style='margin-right:5px;'>" ;
            } else {
                echo "<img src='images/logo70.jpg' align='left' style='margin-right:5px; border:none;'>" ;
            }
            $contatamanho = strlen($dados[subtitulo]);
            $quantidade = 160;
            if($contatamanho > $quantidade){
                $texto = substr_replace($dados[subtitulo], "...", $quantidade, $contatamanho - $quantidade);
            } else {
                $texto = "$dados[subtitulo]";
            }
			$data = explode("-",$dados[data]);
			$data = "$data[2].$data[1].$data[0]";
			?>
            <span style="font-size:10px; color: #0C9"><?=$data?></span><br />

            <span style="font-size:12px; color:black"><b><?=$dados[titulo]?></b></span>
            <div><?=$texto;?></div>
		</a>
    </div>

<? } ?>
</td><td  valign="top" style="width:350px; padding-right:30px;">

<?
	$porcoluna2 = $porcoluna+1;
	$sql= mysql_query("SELECT * FROM noticias_categorias order by nome desc limit $porcoluna2,$tr");
	while ($dados=mysql_fetch_array($sql)){
		$cat1 = $dados[id]; $nome1 = $dados[nome]; $cor1 = $dados[cor];
?>
    <div  class="titulozinhos"><a href="?pg=noticias&cat=<?=$cat1?>" style="color:<?=$cor1?>"><?=$nome1?></a></div>
        <? $dados = mysql_fetch_array(mysql_query("SELECT * FROM noticias_dados where idcat = $cat1 order by id desc limit 1")); ?>
    <div style="padding:0px; margin:0px; padding-top:2px; border-top:1px solid <?=$cor1?>; min-height:80px;" class="textinhos">
        <a href="?pg=noticia&id=<?=$dados[id]?>" style="display:block;">
            <? 
            if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
                echo "<img src='thumbs.php?w=70&h=70&imagem=images/noticias/$dados[id]/$dados[foto01]' align='left' style='margin-right:5px;'>" ;
            } else {
                echo "<img src='images/logo70.jpg' align='left' style='margin-right:5px; border:none;'>" ;
            }
            $contatamanho = strlen($dados[subtitulo]);
            $quantidade = 160;
            if($contatamanho > $quantidade){
                $texto = substr_replace($dados[subtitulo], "...", $quantidade, $contatamanho - $quantidade);
            } else {
                $texto = "$dados[subtitulo]";
            }
			$data = explode("-",$dados[data]);
			$data = "$data[2].$data[1].$data[0]";
			?>
            <span style="font-size:10px; color: #0C9"><?=$data?></span><br />

            <span style="font-size:12px; color:black"><b><?=$dados[titulo]?></b></span>
            <div><?=$texto;?></div>
		</a>
    </div>
<? } ?>
</td></tr></table>



	</div>
</div>
<img src="images/rodapegrande.png">