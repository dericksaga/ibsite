<?
$traducao_de = $_POST[traducao_de];
$lingua = $_POST[lingua];
$filho_de = $_POST[filho_de];
if($traducao_de == 0) {
	if($filho_de == 0){
		$hierarquia = 0;
	} else {
		$sql= mysql_query("SELECT * FROM conteudo_multilingue where id = $filho_de");
		while ($dados=mysql_fetch_array($sql)){
			$hierarquia = $dados[hierarquia]+1;
		}
	}
} else {
	$sql= mysql_query("SELECT * FROM conteudo_multilingue where id = $traducao_de");
	while ($dados=mysql_fetch_array($sql)){
		$hierarquia = $dados[hierarquia];
		$sql2= mysql_query("SELECT * FROM conteudo_multilingue where id = $dados[filho_de]");
		while ($dados2=mysql_fetch_array($sql2)){
			if($dados2[lingua] == $lingua){
				$filho_de = $dados2[id];
			} else {
				$sql3= mysql_query("SELECT * FROM conteudo_multilingue where traducao_de = $dados2[id] or id = $dados2[traducao_de]");
				while ($dados3=mysql_fetch_array($sql3)){
					$filho_de = $dados3[id];
				}
			}
		}
	}
}
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

$sql = "INSERT INTO conteudo_multilingue VALUES ('', '$traducao_de', '$lingua', '$hierarquia', '$filho_de', '$posicao', '$clicavel', '$titulo', '$subtitulo', '$texto', '', '$coment1', '$responsavel', '$data')";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/conteudo/$id_recuperado", 0777);
         @chmod("../images/conteudo/$id_recuperado", 0777);
// fim da criação da pasta
$uploaddir="../images/conteudo/$id_recuperado/";

if($foto01 != "none") {// verifica campo foto 1
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
echo "<strong>$varfoto01</strong> enviada com sucesso!<BR>";
}}

$var1 = mysql_query("update conteudo_multilingue set foto01='$varfoto01' where id='$id_recuperado'");
?>
<h3>Conte&uacute;do cadastrado com sucesso!</h3>

<a href='?pg=../estrutura/conteudo/cadastrar.php'>Voltar</a>