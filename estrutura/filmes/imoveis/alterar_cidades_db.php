<?
$id=$_POST[id];
$nome=$_POST[nome];
$uf=$_POST[uf];

$sql = mysql_query("UPDATE imoveis_cidades SET nome='$nome', uf='$uf' WHERE id='$id'");
?>

<h3>Cidade Alterada com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/listar_cidades.php'>Voltar</a>
