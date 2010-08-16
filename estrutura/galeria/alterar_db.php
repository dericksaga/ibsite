<?
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";
$hora = $_POST[hora];
$nome = $_POST[nome];
$email = $_POST[email];
$msn = $_POST[msn];
$usuario2 = $_POST[usuario20];
$usuario3 = $_POST[usuario30];
$senha2 = md5($_POST[senha2]);
$senha3 = md5($_POST[senha3]);
$campo2 = $_POST[campo2];
$campo3 = $_POST[campo3];
$campo4 = $_POST[campo4];
$campo5 = $_POST[campo5];
$campo6 = $_POST[campo6];
$campo7 = $_POST[campo7];
$campo8 = $_POST[campo8];
$campo9 = $_POST[campo9];
$campo10 = $_POST[campo10];
$campo11 = $_POST[campo11];
$campo12 = $_POST[campo12];
$campo13 = $_POST[campo13];
$campo14 = $_POST[campo14];
$campo15 = $_POST[campo15];
$campo16 = $_POST[campo16];
$campo17 = $_POST[campo17];
$campo18 = $_POST[campo18];
$campo19 = $_POST[campo19];
$campo20 = $_POST[campo20];
$texto = $_POST[texto];
$presentes = $_POST[presentes];
$codigo = $_POST[codigo];

$sql = mysql_query("UPDATE phpsp_users SET nome = '$nome', password = '$senha2', niver = '$data', email = '$email', msn = '$msn' WHERE user='$usuario2'");
$sql = mysql_query("UPDATE phpsp_users SET nome = '$nome', password = '$senha3', niver = '$data', email = '$email', msn = '$msn' WHERE user='$usuario3'");


$sql = mysql_query("UPDATE blog_dados SET nome = '$nome', campo2 = '$campo2', campo3 = '$campo3', campo4 = '$campo4', campo5 = '$campo5', campo6 = '$campo6', campo7 = '$campo7', campo8 = '$campo8', campo9 = '$campo9', campo10 = '$campo10', campo11 = '$campo11', campo12 = '$campo12', campo13 = '$campo13', campo14 = '$campo14', campo15 = '$campo15', campo16 = '$campo16', campo17 = '$campo17', campo18 = '$campo18', campo19 = '$campo19', campo20 = '$campo20', texto = '$texto',  pass1 = '$senha2', pass2 = '$senha3', datafesta = '$data', horafesta = '$hora', email = '$email', msn = '$msn', presentes = '$presentes' WHERE id='$codigo'");

?>
<h3>Alterado com sucesso!</h3>

<meta http-equiv="refresh" content="1;URL='?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$codigo?>'">