<?
$id=$_POST[id];
$nome=$_POST[nome];
$email=$_POST[email];

$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";

$titulo=$_POST[novotitulo];
$subtitulo=$_POST[novosubtitulo];
$texto=$_POST[texto];
$foto01=$_POST[foto01];
$fotos_extras=$_POST[fotos_extras];
$alinhamento_foto=$_POST[alinhamento_foto];
$borda = $_POST[borda];
$creditos_foto=$_POST[creditos_foto];
$destaque=$_POST[destaque];
$categoria = $_POST[categoria];
//$novafoto=$_POST[novafoto];
$largura_foto = $_POST[largura_foto];
$altura_foto = $_POST[altura_foto];

$sql2 = mysql_query("select * from noticias_dados where id='$id'");
$dados=mysql_fetch_array($sql2);

if($_POST['novafoto10'] == "nada"){
$varfoto1 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto10'] == "sim"){
$uploaddir="../images/noticias/$id/";
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto1 = $_FILES['foto01']['name'];
}
}
elseif($_POST['novafoto10'] == "nao"){
$varfoto1 = "$dados[foto01]";
}
$sql = mysql_query("UPDATE noticias_dados SET idcat='$categoria', nome='$nome', email='$email', data='$data', titulo='$titulo', subtitulo='$subtitulo', texto='$texto', foto01='$varfoto1', fotos_extras='$fotos_extras', alinhamento_foto='$alinhamento_foto', borda='$borda', creditos_foto='$creditos_foto', destaque='$destaque', largura_foto='$largura_foto', altura_foto='$altura_foto' WHERE id='$id'");
//$sql = mysql_query("UPDATE noticias_dados SET idcat='$categoria', nome='$nome', email='$email', data='$data', titulo='$titulo', subtitulo='$subtitulo', texto='$texto', foto01='$varfoto1', fotos_extras='$fotos_extras', alinhamento_foto='$alinhamento_foto', borda='$borda', creditos_foto='$creditos_foto', destaque='$destaque', largura_foto='$largura_foto', altura_foto='$altura_foto' WHERE id='$id'"); 
?>

<h3>Notícia Alterada com sucesso!</h3>

<a href='?pg=../estrutura/noticias/listar.php'>Voltar</a>
