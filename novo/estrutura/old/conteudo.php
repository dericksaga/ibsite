<div class="noticia">
<? 	$sql = mysql_query("SELECT * FROM conteudo_multilingue where id = $_GET[id]");
		while($dados=mysql_fetch_array($sql)){
			if(is_file("images/conteudo/$dados[id]/$dados[foto01]")) { 
				echo "<img src='thumbs.php?w=120&imagem=images/conteudo/$dados[id]/$dados[foto01]' align='left'>";
			}		
			echo "<h1>$dados[titulo]</h1>";
			echo "<h2>$dados[subtitulo]</h2>";
			echo nl2br($dados[texto]);
		}
?>
<? include "estrutura/imprimir.php"; ?>
</div>