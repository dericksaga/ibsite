<?
$data1 = explode("/", $_POST[data]);
$data = "$data1[2]-$data1[1]-$data1[0]";
$hora = $_POST[hora];
$nome = $_POST[nome];
$email = $_POST[email];
$msn = $_POST[msn];
$usuario2 = $_POST[usuario2];
$senha2 = md5($_POST[senha2]);
$usuario3 = $_POST[usuario3];
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

$sql = "INSERT INTO phpsp_users ( primary_key , nome , niver , email, msn, user, password, userlevel )
VALUES (
NULL , '$nome', '$data', '$email', '$msn', '$usuario2', '$senha2', 2
);";
$sql = mysql_query($sql);
$id_usuario1 = mysql_insert_id();

$sql = "INSERT INTO phpsp_users ( primary_key , nome , niver , email, msn, user, password, userlevel )
VALUES (
NULL , '$nome', '$data', '$email', '$msn', '$usuario3', '$senha3', 3
);";
$sql = mysql_query($sql);
$id_usuario2 = mysql_insert_id();

$sql = "INSERT INTO blog_dados ( id , nome , campo2 , campo3  , campo4 , campo5 , campo6 , campo7 , campo8 , campo9 , campo10 , campo11 , campo12 , campo13 , campo14 , campo15 , campo16 , campo17 , campo18 , campo19 , campo20, texto, user1, user2, pass1, pass2, datafesta, horafesta, email, msn, presentes, usuario1, usuario2 )
VALUES (
NULL , '$nome', '$campo2', '$campo3', '$campo4', '$campo5', '$campo6', '$campo7', '$campo8', '$campo9', '$campo10', '$campo11', '$campo12', '$campo13', '$campo14', '$campo15', '$campo16', '$campo17', '$campo18', '$campo19', '$campo20', '$texto', '$usuario2', '$usuario3', '$senha2', '$senha3', '$data', '$hora', '$email', '$msn', '$presentes', $id_usuario1, $id_usuario2
);";
$sql = mysql_query($sql);

$id_recuperado = mysql_insert_id();

// inicia criação de pasta
$pasta = @mkdir("../images/blogs/$id_recuperado", 0777);
         @chmod("../images/blogs/$id_recuperado", 0777);
// fim da criação da pasta

?>
<h3>Blog cadastrado com sucesso!</h3>

 <meta http-equiv="refresh" content="0;URL='?pg=../estrutura/imoveis/mandafotos.php&recupera=<?=$id_recuperado?>'">