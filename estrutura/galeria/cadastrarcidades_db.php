<?
$nome = $_POST[nome];
$uf = $_POST[uf];

$sql = "INSERT INTO imoveis_cidades VALUES ('', '$nome', '$uf')";
$sql = mysql_query($sql);

?>
<h3>Cidade cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/listar_cidades.php'>Voltar</a>