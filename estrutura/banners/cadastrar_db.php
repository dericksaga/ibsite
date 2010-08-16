<?
$cliente = $_POST[cliente];
$foto01 = $_POST[foto01];
$tipo = $_POST[tipo];
$url = $_POST[url];
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";
$data2 = date("y-m-d");

$sql = "INSERT INTO banners VALUES ('', '$cliente', '$url', '0', '', '$tipo', '$data2', '$data')";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/banners/$id_recuperado", 0777);
         @chmod("../images/banners/$id_recuperado", 0777);
// fim da criação da pasta
$uploaddir="../images/banners/$id_recuperado/";

if($foto01 != "none") {// verifica campo foto 1
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
echo "<strong>$varfoto01</strong> enviada com sucesso!<BR>";
}}

$var1 = mysql_query("update banners set foto01='$varfoto01' where id='$id_recuperado'");
?>
<h3>Banner cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/banners/listar.php'>Voltar</a>