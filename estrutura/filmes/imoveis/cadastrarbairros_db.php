<?
$nome = $_POST[nome];
$cidade = $_POST[cidade];

$sql = "INSERT INTO imoveis_bairros VALUES ('', '$cidade', '$nome')";
$sql = mysql_query($sql);

?>
<h3>Bairro cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/listar_bairros.php'>Voltar</a>