<?
$nome = $_POST[nome];

$sql = "INSERT INTO imoveis_tipos VALUES ('', '$nome')";
$sql = mysql_query($sql);

?>
<h3>Tipo cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/imoveis/listar_tipos.php'>Voltar</a>