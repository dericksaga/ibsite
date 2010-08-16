<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
<table width="380" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
<div id="gallery" align="center" class="branco"">
<?
$id = $_GET[id];
$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados=mysql_fetch_array($sql);
 echo "<div align='left' class='obras'><br>$dados[nome]</div><br><br>";
	if($dados[foto01] != "") {
	  echo "<p>
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]' onclick='return hs.expand(this)' title='$dados[COMENTARIO1]<BR><BR> '#gallery').lightBox();'>
	  		<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]' style='border:green 3px double; margin-right: 10px; margin-bottom:10px;'>
			</a>
			";	  
	} 
 if($dados[FOTO02] != "") {
	  echo "
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO02]' onclick='return hs.expand(this)' title='$dados[COMENTARIO2]<BR><BR> '#gallery').lightBox();'>
			<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO02]' style='border:green 3px double; margin-right: 10px; margin-bottom:10px;'>
			</a>
			";
	  } 
 if($dados[FOTO03] != "") {
	  echo "
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO03]' onclick='return hs.expand(this)' title='$dados[COMENTARIO3]<BR><BR> '#gallery').lightBox();'>
	  		<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO03]' style='border:green 3px double; margin-bottom:10px; '>
			</a></p>";
	  } 
 if($dados[FOTO04] != "") {
	  echo "<p>
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO04]' onclick='return hs.expand(this)' title='$dados[COMENTARIO4]<BR><BR> '#gallery').lightBox();'>
	  		<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO04]' style='border:green 3px double; margin-right: 10px; margin-bottom:10px;'>
			</a>
			";	  
	} 
 if($dados[FOTO05] != "") {
	  echo "
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO05]' onclick='return hs.expand(this)' title='$dados[COMENTARIO5]<BR><BR> '#gallery').lightBox();'>
			<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO05]' style='border:green 3px double; margin-right: 10px; margin-bottom:10px;'>
			</a>
			";
	  } 
 if($dados[FOTO06] != "") {
	  echo "
	  		<a href='images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO06]' onclick='return hs.expand(this)' title='$dados[COMENTARIO6]<BR><BR> '#gallery').lightBox();'>
	  		<img src='admin/thumbs.php?w=113&h=80&imagem=../images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[FOTO06]' style='border:green 3px double; margin-bottom:10px;'>
			</a></p>";
	  } 
	  
	  ?>
	  </div>
</td>
  </tr>
</table>