<?
$id = $_POST[id];
$titulo = $_POST[titulo];
$title = $_POST[title];
$sinopse = $_POST[sinopse];
$data = date(Y-m-d);
$data2 = date(Y-m-d);
$classificacao = $_POST[classificacao];
$site = $_POST[site];
$trailer = $_POST[trailer];
$atores = $_POST[atores];
$direcao = $_POST[direcao];
$genero = $_POST[genero];
$duracao = $_POST[duracao];
$destaque = $_POST[destaque];
$exibicao = $_POST[destaque];


$sql = "UPDATE filmes_dados SET titulo='$titulo',title='$title',sinopse='$sinopse',data='$data',classificacao='$classificacao', site='$site', trailer='$trailer', atores='$atores', direcao='$direcao', genero='$genero', duracao='$duracao', destaque='$destaque' WHERE id='$id'";
$sql2 = mysql_query($sql);
?>
<h3>Filme Alterado com sucesso!</h3>

<p><a href='?pg=../estrutura/filmes/listar.php'><< Voltar para a listagem</a></p>