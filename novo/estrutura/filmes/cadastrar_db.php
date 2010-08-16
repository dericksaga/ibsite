<?

$titulo = $_POST[titulo];
$title = $_POST[title];
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
?>
<h3>Filme cadastrado com sucesso!</h3>
<p><a href='?pg=../estrutura/filmes/listar.php'>&lt;&lt; Voltar para a listagem</a></p>
