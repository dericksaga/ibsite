<?
$id=$_POST[id];
$cliente = $_POST[cliente];
$foto01 = $_POST[foto01];
$tipo = $_POST[tipo];
$url = $_POST[url];
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";
$data2 = date("y-m-d");

$sql2 = mysql_query("select * from banners where id='$id'");
$dados=mysql_fetch_array($sql2);

if($_POST['novafoto10'] == "nada"){
$varfoto1 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto10'] == "sim"){
$uploaddir="../images/banners/$id/";
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto1 = $_FILES['foto01']['name'];
}
}
elseif($_POST['novafoto10'] == "nao"){
$varfoto1 = "$dados[foto01]";
}
$sql = mysql_query("UPDATE banners SET cliente='$cliente', foto01='$varfoto1', url='$url', tipo='$tipo', datafinal='$data' where id=$id");
?>

<h3>Banner Alterado com sucesso!</h3>

<a href='?pg=../estrutura/banners/listar.php'>Voltar</a>