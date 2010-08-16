<?
$id=$_GET[imovel];
$coment=$_POST[alteracomentario];

$sql = mysql_query("UPDATE blog_fotos SET coment='$coment' WHERE id='$imovel'");
?>

<h3>Alterado com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$id?>'>Voltar</a>
