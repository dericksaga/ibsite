<?
include("path2.php");
$sql = mysql_query("SELECT * FROM noticias order by id desc");
?>

<marquee width="100%" height="50" direction="up" scrollamount="1" onMouseover="this.scrollAmount=0" onMouseout="this.scrollAmount=1">

<? while ($dados=mysql_fetch_array($sql)) {?>

<font size='1' face='Verdana, Tahoma'><a href=ver_noticias.php?id=<? echo $dados[id];?>><strong>&raquo; <? echo $dados[data]?></strong><BR><? echo $dados[titulo]?></a></font><BR>----------------------------------------<br>


<? } // fecha o while ?>

</marquee>