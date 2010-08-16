<?
//include("../config.php");
$sql = mysql_query("SELECT * FROM noticias_dados order by id desc");
?>

<marquee width="100%" height="15" direction="left" scrollamount="4" onMouseover="this.scrollAmount=0" onMouseout="this.scrollAmount=4">
<? while ($dados=mysql_fetch_array($sql)) {

echo "<a href='?pg=noticia&id=$dados[id]'><b>&raquo;</b> [$dados[data]] - <b>$dados[titulo]</b></a>&nbsp;&nbsp;&nbsp;";
}?>
</marquee>