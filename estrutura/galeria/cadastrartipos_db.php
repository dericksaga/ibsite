<?
$nome = $_POST[nome];

$sql = "INSERT INTO fotos_galerias VALUES ('', '$nome')";
$sql = mysql_query($sql);
$id_recuperado = mysql_insert_id();
?>
<h3>Galeria cadastrada com sucesso!</h3>
<script language='JavaScript'> window.location='?pg=../estrutura/galeria/administrar.php&id=<?=$id_recuperado?>'; </script>
<a href='?pg=../estrutura/galeria/listar_tipos.php'>Voltar</a>	