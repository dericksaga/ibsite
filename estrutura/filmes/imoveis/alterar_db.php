<?
$codigo = $_POST[codigo];
$tipo = $_POST[tipo];
$situacao = $_POST[situacao];
$bairro = $_POST[bairro];
$cidade = $_POST[cidade];
$valor = $_POST[valor];
$areacasa = $_POST[areacasa];
$arealote = $_POST[arealote];
$salas = $_POST[salas];
$suites = $_POST[suites];
$quartos = $_POST[quartos];
$banheiros = $_POST[banheiros];
$garagem = $_POST[garagem];
$dados = $_POST[dados];
$destaque = $_POST[destaque];
$destaqueprincipal  = $_POST[destaqueprincipal];
$textodestaque = $_POST[textodestaque];
$nomedono = $_POST[nomedono];
$endereco = $_POST[endereco];
$telefone = $_POST[telefone];
$maisdados = $_POST[maisdados];

echo $_POST[destaqueprincipal];

if(is_numeric($areacasa) AND is_numeric($arealote) AND is_numeric($salas) AND is_numeric($suites) AND is_numeric($quartos) AND is_numeric($banheiros) AND is_numeric($garagem)){


$sql = mysql_query("UPDATE imoveis SET tipo = $tipo, situacao = $situacao, bairro = $bairro,  cidade = $cidade, valor = '$valor', areacasa = $areacasa, arealote = $arealote, salas = $salas, suites = $suites, quartos = $quartos, banheiros = $banheiros, garagem = $garagem, dados = '$dados', destaque = $destaque, destaqueprincipal = $destaqueprincipal, textodestaque = '$textodestaque', nomedono = '$nomedono', endereco = '$endereco', telefone = '$telefone', maisdados = '$maisdados' WHERE codigo='$codigo'");

?>
<h3>Imóvel Alterado com sucesso!</h3>

<meta http-equiv="refresh" content="1;URL='?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$codigo?>'">
<? } else {echo "<br /><br /><br /><br /><br /><br /><br /><a href='javascript:back(-1)'>Volte à página anterior e verifique os campos digitados.<br>Os campos que estão marcados com 'Apenas Números' <br>não devem possuir pontos, vírgulas ou outros elementos não numéricos.<br><br>Voltar</a>";} // if da linha 17 ?>