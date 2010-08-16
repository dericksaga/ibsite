<center>
<br />
	<img src="images/logomedia.jpg"><br />
<br />

<?
	$erro = "Houve um problema ao tentar liberar o recado. Por favor, acesse o sistema ou contacte o administrador.";
if ($_GET[acao] == "vai"){

		$sql = mysql_query("select * from noticias_comentarios where id='$_GET[iiiiid]'");
		$dados=mysql_fetch_array($sql);
		$email = md5($dados[email]);
		
		if ($_GET[cod] == $email){
			$sql = mysql_query("UPDATE noticias_comentarios SET autorizacao='1' WHERE id='$_GET[iiiiid]'");
			echo "<div class='textopreto' style='color: black; text-align:center;'>Coment&aacute;rio liberado.</div>";
		} else { echo "<div class='textopreto' style='color: black; text-align:center;'>$erro</div>";}
	} else { echo "<div class='textopreto' style='text-align:center;color: black; '><>$erro</div>";}
?>
</center>