<?
$id = $_POST[id];
$traducao_de = $_POST[traducao_de];
$lingua = $_POST[lingua];
$filho_de = $_POST[filho_de];
$posicao = 0;
$clicavel = $_POST[clicavel];
$titulo = $_POST[titulo];
$subtitulo = $_POST[subtitulo];
$texto = $_POST[texto];
$foto01 = $_POST[foto01];
$coment1 = $_POST[coment1];
$responsavel = $_POST[responsavel];
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";

$sql2 = mysql_query("select * from conteudo_multilingue where id='$id'");
$dados=mysql_fetch_array($sql2);

if($_POST['novafoto10'] == "nada"){
$varfoto1 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto10'] == "sim"){
$uploaddir="../images/conteudo/$id/";
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto1 = $_FILES['foto01']['name'];
}
}
elseif($_POST['novafoto10'] == "nao"){
$varfoto1 = "$dados[foto01]";
}
$sql = mysql_query("UPDATE conteudo_multilingue SET traducao_de='0', lingua='ptbr', hierarquia='$hierarquia', filho_de='0', posicao='$posicao', clicavel='$clicavel', titulo='$titulo', foto01='$varfoto1', subtitulo='$subtitulo', texto='$texto', coment1='$coment1', responsavel='$responsavel', data='$data' WHERE id='$id'");
?>


<h3>Conteúdo Alterado com sucesso!</h3>

<a href='?pg=../estrutura/conteudo/listar.php'>Voltar</a>
