<div style="width:701px; height:30px; position:absolute; margin-left:254px; margin-top:50PX;" class="menu"> <!-- menu -->
	<?
        $sql = mysql_query("SELECT * FROM conteudo_multilingue  order by titulo asc");
        while($dados=mysql_fetch_array($sql)){
    ?>
        <a href="?pg=conteudo&id=<?=$dados[id]?>&_<?=cl($dados[titulo])?>"><?=$dados[titulo]?></a> |
    <? } ?>
    <a href="?pg=videos">V&Iacute;DEOS</a> | <a href="?pg=noticias">NOT&Iacute;CIAS</a> | <a href="?pg=contato">CONTATO</a>
</div>