<?
$id=$_POST[id];
$nome=$_POST[nome];
$cidade=$_POST[cidade];

$sql = mysql_query("UPDATE imoveis_bairros SET nome='$nome', cidade='$cidade' WHERE id='$id'");
?>

<h3>Bairro Alterado com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/listar_bairros.php'>Voltar</a>
