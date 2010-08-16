<?
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

if(is_numeric($areacasa) AND is_numeric($arealote) AND is_numeric($salas) AND is_numeric($suites) AND is_numeric($quartos) AND is_numeric($banheiros) AND is_numeric($garagem)){

$sql = "INSERT INTO imoveis ( codigo , tipo , situacao , bairro , cidade , valor , areacasa , arealote , salas , suites , quartos , banheiros , garagem , dados , data, destaque, destaqueprincipal, textodestaque, nomedono, endereco, telefone, maisdados )
VALUES (
NULL , $tipo, $situacao, $bairro, $cidade, '$valor', $areacasa, $arealote, $salas, $suites, $quartos, $banheiros, $garagem, '$dados', '', $destaque, $destaqueprincipal, '$textodestaque', '$nomedono', '$endereco', '$telefone', '$maisdados'
);";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/imoveis/$id_recuperado", 0777);
         @chmod("../images/imoveis/$id_recuperado", 0777);
// fim da criação da pasta

?>
<h3>Imóvel cadastrado com sucesso!</h3>

 <meta http-equiv="refresh" content="0;URL='?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$id_recuperado?>'">
<? } else {echo "<br /><br /><br /><br /><br /><br /><br /><a href='javascript:back(-1)'>Volte à página anterior e verifique os campos digitados.<br>Os campos que estão marcados com 'Apenas Números' <br>não devem possuir pontos, vírgulas ou outros elementos.<br><br>Voltar</a>";} // if da linha 16 ?>