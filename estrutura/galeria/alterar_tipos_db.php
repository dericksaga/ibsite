<?
$id=$_POST[id];
$nome=$_POST[nome];

$sql = mysql_query("UPDATE fotos_galerias SET nome='$nome' WHERE id='$id'");
//$sql = mysql_query("UPDATE noticias_dados SET idcat='$categoria', nome='$nome', email='$email', data='$data', titulo='$titulo', subtitulo='$subtitulo', texto='$texto', foto01='$varfoto1', fotos_extras='$fotos_extras', alinhamento_foto='$alinhamento_foto', borda='$borda', creditos_foto='$creditos_foto', destaque='$destaque', largura_foto='$largura_foto', altura_foto='$altura_foto' WHERE id='$id'"); 
?>

<h3>Galeria Alterada com sucesso!</h3>

<a href='?pg=../estrutura/galeria/listar_tipos.php'>Voltar</a>
<script language='JavaScript'> window.location='?pg=../estrutura/galeria/administrar.php&id=<?=$id?>'; </script>