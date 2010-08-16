<?
$nome = $_POST[nome];
$email = $_POST[email];
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";
$titulo = $_POST[titulo];
$subtitulo = $_POST[subtitulo];
$texto = $_POST[texto];
$foto01 = $_POST[foto01];
$fotos_extras = $_POST[fotos_extras];
$alinhamento_foto = $_POST[alinhamento_foto];
$borda = $_POST[borda];
$creditos_foto = $_POST[creditos_foto];
$status = $_POST[status];
$categoria = $_POST[categoria];
$largura_foto = $_POST[largura_foto];
$altura_foto = $_POST[altura_foto];

$sql = "INSERT INTO noticias_dados VALUES ('', '$categoria', '$nome', '$email', '$data', '$titulo', '$subtitulo', '$texto', '', '$fotos_extras', '$alinhamento_foto', '$borda', '$creditos_foto', '$status', '$largura_foto', '$altura_foto')";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/noticias/$id_recuperado", 0777);
         @chmod("../images/noticias/$id_recuperado", 0777);
// fim da criação da pasta
$uploaddir="../images/noticias/$id_recuperado/";

if($foto01 != "none") {// verifica campo foto 1
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
echo "<strong>$varfoto01</strong> enviada com sucesso!<BR>";
}}

$var1 = mysql_query("update noticias_dados set foto01='$varfoto01' where id='$id_recuperado'");
?>
<h3>Notícia cadastrada com sucesso!</h3>

<a href='?pg=../estrutura/noticias/listar.php'>Voltar</a>