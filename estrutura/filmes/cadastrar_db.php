<?

$titulo = $_POST[titulo];
$title = $_POST[categoria];
$sinopse = $_POST[sinopse];
//$data = "$_POST[ano]-$_POST[mes]-$_POST[dia]";
$data = date(Y-m-d);
//$data2 = "$_POST[ano2]-$_POST[mes2]-$_POST[dia2]";
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

$sql = mysql_query("INSERT INTO filmes_dados VALUES ('','$titulo','$title','$sinopse','$classificacao','$site','$trailer','$atores','$direcao','$genero','$duracao',$destaque,'$data','','','','','','')");

$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/filmes/$id_recuperado", 0777);
         @chmod("../images/filmes/$id_recuperado", 0777);
// fim da criação da pasta
$uploaddir="../images/filmes/$id_recuperado/";

if($foto01 != "none") {// verifica campo foto 1
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
echo "<strong>$varfoto01</strong> enviada com sucesso!<BR>";
}}

$var1 = mysql_query("update filmes_dados set cartaz='$varfoto01' where id='$id_recuperado'");

?>

<h3>Filme cadastrado com sucesso!</h3>
<p><a href='?pg=../estrutura/filmes/listar.php'>&lt;&lt; Voltar para a listagem</a></p>
