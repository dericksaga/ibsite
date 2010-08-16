<?
$coment=$_POST[comentfoto];
$id = $_POST[iddafoto];
$fotodia = $_POST[fotodia];

$sql = mysql_query("UPDATE fotos SET coment='$coment', fotodia = '$fotodia' WHERE id='$id'");

?>

<h3>Alterado com sucesso!</h3>
<script language='JavaScript'> window.location='?pg=../estrutura/galeria/administrar.php&id=<?=$_GET[idgaleria]?>'; </script>
