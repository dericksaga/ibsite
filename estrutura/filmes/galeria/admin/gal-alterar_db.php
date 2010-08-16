<?
$id = $_POST[id];
$id_franquia = $_POST[id_franquia];
$id_cat = $_POST[id_cat];
$nome = $_POST[nome];
$data = "$_POST[ano]-$_POST[mes]-$_POST[dia]";;
$pastaantiga = $_POST[pastaantiga];
$pastanova = $_POST[pastanova];

$foto_antiga01 = $_POST[foto_antiga01];
$foto01 = $_POST[foto01];
$nova_foto01 = $_POST[nova_foto01];
		$foto_antiga02 = $_POST[foto_antiga02];
		$foto02 = $_POST[foto02];
		$nova_foto02 = $_POST[nova_foto02];
$foto_antiga03 = $_POST[foto_antiga03];
$foto03 = $_POST[foto03];
$nova_foto03 = $_POST[nova_foto03];
		$foto_antiga04 = $_POST[foto_antiga04];
		$foto04 = $_POST[foto04];
		$nova_foto04 = $_POST[nova_foto04];
$foto_antiga05 = $_POST[foto_antiga05];
$foto05 = $_POST[foto05];
$nova_foto05 = $_POST[nova_foto05];
		$foto_antiga06 = $_POST[foto_antiga06];
		$foto06 = $_POST[foto06];
		$nova_foto06 = $_POST[nova_foto06];

$c1 = $_POST[comentario1];
$c2 = $_POST[comentario2];
$c3 = $_POST[comentario3];
$c4 = $_POST[comentario4];
$c5 = $_POST[comentario5];
$c6 = $_POST[comentario6];


// começa funcoes p/ troca de foto
if($nova_foto01 == nada){
$wh1 = ", foto01=''";
}
if($nova_foto01 == nao){
$wh1 = ""; 
}
if($nova_foto01 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga01"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto01 != "none") {// verifica campo foto01
if (move_uploaded_file($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
}}
// termina a função para enviar a foto
$wh1 = ", foto01='$varfoto01'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto02 == nada){
$wh2 = ", FOTO02=''";
}
if($nova_foto02 == nao){
$wh2 = ""; 
}
if($nova_foto02 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga02"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto02 != "none") {// verifica campo foto02
if (move_uploaded_file($_FILES['foto02']['tmp_name'], $uploaddir . $_FILES['foto02']['name'])) {
$varfoto02 = $_FILES['foto02']['name'];
}}
// termina a função para enviar a foto
$wh2 = ", FOTO02='$varfoto02'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto03 == nada){
$wh3 = ", FOTO03=''";
}
if($nova_foto03 == nao){
$wh3 = ""; 
}
if($nova_foto03 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga03"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto03 != "none") {// verifica campo foto03
if (move_uploaded_file($_FILES['foto03']['tmp_name'], $uploaddir . $_FILES['foto03']['name'])) {
$varfoto03 = $_FILES['foto03']['name'];
}}
// termina a função para enviar a foto
$wh3 = ", FOTO03='$varfoto03'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto04 == nada){
$wh4 = ", FOTO04=''";
}
if($nova_foto04 == nao){
$wh4 = ""; 
}
if($nova_foto04 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga04"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto04 != "none") {// verifica campo foto04
if (move_uploaded_file($_FILES['foto04']['tmp_name'], $uploaddir . $_FILES['foto04']['name'])) {
$varfoto04 = $_FILES['foto04']['name'];
}}
// termina a função para enviar a foto
$wh4 = ", FOTO04='$varfoto04'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto05 == nada){
$wh5 = ", FOTO05=''";
}
if($nova_foto05 == nao){
$wh5 = ""; 
}
if($nova_foto05 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga05"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto05 != "none") {// verifica campo foto05
if (move_uploaded_file($_FILES['foto05']['tmp_name'], $uploaddir . $_FILES['foto05']['name'])) {
$varfoto05 = $_FILES['foto05']['name'];
}}
// termina a função para enviar a foto
$wh5 = ", FOTO05='$varfoto05'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto06 == nada){
$wh6 = ", FOTO06=''";
}
if($nova_foto06 == nao){
$wh6 = ""; 
}
if($nova_foto06 == sim){
@unlink("../images/eventos/$id_franquia/$pastanova/$foto_antiga06"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/eventos/$id_franquia/$pastanova/";
//echo $uploaddir;
if($foto06 != "none") {// verifica campo foto06
if (move_uploaded_file($_FILES['foto06']['tmp_name'], $uploaddir . $_FILES['foto06']['name'])) {
$varfoto06 = $_FILES['foto06']['name'];
}}
// termina a função para enviar a foto
$wh6 = ", FOTO06='$varfoto06'";
}
// termina funcoes p/ troca de foto

$sql = "UPDATE galeria SET id_cat='$id_cat', id_franquia='$id_franquia', nome='$nome', data='$data', pasta='$pastanova', COMENTARIO1='$c1', COMENTARIO2='$c2', COMENTARIO3='$c3', COMENTARIO4='$c4', COMENTARIO5='$c5', COMENTARIO6='$c6' $wh1 $wh2 $wh3 $wh4 $wh5 $wh6 WHERE id='$id';";
//echo $sql;
$sql2 = mysql_query($sql);

?>
<h3>Obra  Alterada com sucesso!</h3>
<br>

<a href='?pg=../estrutura/galeria/admin/listar.php'>Voltar</a>