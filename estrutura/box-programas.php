<div style="width:385px; height:296px; margin-left:0px;  float:left;">
	<a href="?pg=videos"><img src="images/programas-box.png" border="0" style="margin-left:20px; margin-top:18px;"></a>
    <div style="width:320px; margin-left:30px">
		<?
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_categorias where id <> 1 order by rand() limit 1"));
            $cat1 = $dados[id]; $nome1 = $dados[nome]; $cor1 = $dados[cor];
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_categorias where id <> 1 and id <> $cat1 order by rand() limit 1"));
            $cat2 = $dados[id]; $nome2 = $dados[nome]; $cor2 = $dados[cor];
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_categorias where id <> 1 and id <> $cat1 and id <> $cat2 order by rand() limit 1"));
            $cat3 = $dados[id]; $nome3 = $dados[nome]; $cor3 = $dados[cor];
        ?>
        <br />
        <div  class="titulozinhos"><a style="color:<?=$cor1?>"><?=$nome1?></a></div>
            <? $dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_dados where title = $cat1 order by id desc limit 1")); ?>
        <div style="padding:0px; margin:0px; padding-top:2px; border-top:1px solid <?=$cor1?>; min-height:80px;" class="textinho">
            <a href="?pg=video&id=<?=$dados[id]?>" style="display:block;">
                <? 
                if (is_file("images/filmes/$dados[id]/$dados[cartaz]")){
                    echo "<img src='thumbs.php?w=120&h=70&imagem=images/filmes/$dados[id]/$dados[cartaz]' border='$dados[borda]' align='left' style='border:solid 1px gray; margin-right:5px;'>" ;
                } else {
                    echo "<img src='thumbs.php?w=120&imagem=images/logovideo.jpg' align='left' style='margin-right:5px; border:solid 1px gray;'>" ;
                }
                $contatamanho = strlen($dados[texto]);
                $quantidade = 160;
                if($contatamanho > $quantidade){
                    $texto = substr_replace($dados[titulo], "...", $quantidade, $contatamanho - $quantidade);
                } else {
                    $texto = "$dados[titulo]";
                }
                echo $texto;
            ?></a>
        </div>
        
        <div  class="titulozinhos"><a style="color:<?=$cor2?>"><?=$nome2?></a></div>
            <? $dados = mysql_fetch_array(mysql_query("SELECT * FROM filmes_dados where title = $cat2 order by id desc limit 1")); ?>
        <div style="padding:0px; margin:0px; padding-top:2px; border-top:1px solid <?=$cor2?>; min-height:80px;" class="textinho">
            <a href="?pg=video&id=<?=$dados[id]?>" style="display:block;">
                <? 
                if (is_file("images/filmes/$dados[id]/$dados[cartaz]")){
                    echo "<img src='thumbs.php?w=120&h=70&imagem=images/filmes/$dados[id]/$dados[cartaz]' border='$dados[borda]' align='left' style='border:solid 1px gray; margin-right:5px;'>" ;
                } else {
                    echo "<img src='thumbs.php?w=120&imagem=images/logovideo.jpg' align='left' style='margin-right:5px; border:solid 1px gray;'>" ;
                }
                $contatamanho = strlen($dados[texto]);
                $quantidade = 160;
                if($contatamanho > $quantidade){
                    $texto = substr_replace($dados[nome], "...", $quantidade, $contatamanho - $quantidade);
                } else {
                    $texto = "$dados[titulo]";
                }
                echo $texto;
            ?></a>
        </div>
	</div>
</div>
