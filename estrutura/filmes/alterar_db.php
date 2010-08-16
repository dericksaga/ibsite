<?
$id = $_POST[id];
$titulo = $_POST[titulo];
$title = $_POST[categoria];
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
$cartaz=$_POST[foto01];
echo $categoria;

$sql2 = mysql_query("select * from filmes_dados where id='$id'");
$dados=mysql_fetch_array($sql2);

if($_POST['novafoto10'] == "nada"){
$varfoto1 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto10'] == "sim"){
$uploaddir="../images/filmes/$id/";
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto1 = $_FILES['foto01']['name'];
}
}
elseif($_POST['novafoto10'] == "nao"){
$varfoto1 = "$dados[cartaz]";
}

$sql = "UPDATE filmes_dados SET titulo='$titulo',title='$title',sinopse='$sinopse',data='$data',classificacao='$classificacao', site='$site', trailer='$trailer', atores='$atores', direcao='$direcao', title='$title', genero='$genero', duracao='$duracao', destaque='$destaque', cartaz='$varfoto1' WHERE id='$id'";
$sql2 = mysql_query($sql);
?>
<h3>Filme Alterado com sucesso!</h3>

<p><a href='?pg=../estrutura/filmes/listar.php'><< Voltar para a listagem</a></p>