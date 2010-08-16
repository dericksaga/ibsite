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



// começa funcoes p/ troca de foto
if($nova_foto01 == nada){
$wh1 = ", cartaz=''";
}
if($nova_foto01 == nao){
$wh1 = ""; 
}
if($nova_foto01 == sim){
@unlink("../images/filmes/$id/$foto_antiga01"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto01 != "none") {// verifica campo foto01
if (move_uploaded_file($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto01 = $_FILES['foto01']['name'];
}}
// termina a função para enviar a foto
$wh1 = ", cartaz='$varfoto01'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto02 == nada){
$wh2 = ", imgdestaque=''";
}
if($nova_foto02 == nao){
$wh2 = ""; 
}
if($nova_foto02 == sim){
@unlink("../images/filmes/$id/$foto_antiga02"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto02 != "none") {// verifica campo foto02
if (move_uploaded_file($_FILES['foto02']['tmp_name'], $uploaddir . $_FILES['foto02']['name'])) {
$varfoto02 = $_FILES['foto02']['name'];
}}
// termina a função para enviar a foto
$wh2 = ", imgdestaque='$varfoto02'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto03 == nada){
$wh3 = ", cena1=''";
}
if($nova_foto03 == nao){
$wh3 = ""; 
}
if($nova_foto03 == sim){
@unlink("../images/filmes/$id/$foto_antiga03"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto03 != "none") {// verifica campo foto03
if (move_uploaded_file($_FILES['foto03']['tmp_name'], $uploaddir . $_FILES['foto03']['name'])) {
$varfoto03 = $_FILES['foto03']['name'];
}}
// termina a função para enviar a foto
$wh3 = ", cena1='$varfoto03'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto04 == nada){
$wh4 = ", cena2=''";
}
if($nova_foto04 == nao){
$wh4 = ""; 
}
if($nova_foto04 == sim){
@unlink("../images/filmes/$id/$foto_antiga04"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto04 != "none") {// verifica campo foto04
if (move_uploaded_file($_FILES['foto04']['tmp_name'], $uploaddir . $_FILES['foto04']['name'])) {
$varfoto04 = $_FILES['foto04']['name'];
}}
// termina a função para enviar a foto
$wh4 = ", cena2='$varfoto04'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto05 == nada){
$wh5 = ", cena3=''";
}
if($nova_foto05 == nao){
$wh5 = ""; 
}
if($nova_foto05 == sim){
@unlink("../images/filmes/$id/$foto_antiga05"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto05 != "none") {// verifica campo foto05
if (move_uploaded_file($_FILES['foto05']['tmp_name'], $uploaddir . $_FILES['foto05']['name'])) {
$varfoto05 = $_FILES['foto05']['name'];
}}
// termina a função para enviar a foto
$wh5 = ", cena3='$varfoto05'";
}
// termina funcoes p/ troca de foto

// começa funcoes p/ troca de foto
if($nova_foto06 == nada){
$wh6 = ", cena4=''";
}
if($nova_foto06 == nao){
$wh6 = ""; 
}
if($nova_foto06 == sim){
@unlink("../images/filmes/$id/$foto_antiga06"); //apaga foto antiga
// aqui executa o upload da foto
$uploaddir="../images/filmes/$id/";
//echo $uploaddir;
if($foto06 != "none") {// verifica campo foto06
if (move_uploaded_file($_FILES['foto06']['tmp_name'], $uploaddir . $_FILES['foto06']['name'])) {
$varfoto06 = $_FILES['foto06']['name'];
}}
// termina a função para enviar a foto
$wh6 = ", cena4='$varfoto06'";
}
// termina funcoes p/ troca de foto

$sql = "UPDATE filmes_dados SET id = '$id' $wh1 $wh2 $wh3 $wh4 $wh5 $wh6 WHERE id='$id';";
//echo $sql;
$sql2 = mysql_query($sql);

?>
<h3>Filme  Alterado com sucesso!</h3>
<br>

<?
	function cl($var){
		$var = ereg_replace("[ÁÀÂÃ]","A",$var);
		$var = ereg_replace("[áàâãª]","a",$var);
		$var = ereg_replace("[ÉÈÊ]","E",$var);
		$var = ereg_replace("[éèê]","e",$var);
		$var = ereg_replace("[íìî]","i",$var);
		$var = ereg_replace("[ÍÌÎ]","I",$var);
		$var = ereg_replace("[ÓÒÔÕ]","O",$var);
		$var = ereg_replace("[óòôõº]","o",$var);
		$var = ereg_replace("[ÚÙÛ]","U",$var);
		$var = ereg_replace("[úùû]","u",$var);
		$var = str_replace("Ç","C",$var);
		$var = str_replace("ç","c",$var);
		$var = str_replace(" ","-",$var);
		return $var;
	}
?>
<p><a href='?pg=../estrutura/filmes/listar.php'>&lt;&lt; Voltar para listagem</a></p>
<p><a href='?pg=../estrutura/filmes/hora.php&id=<?=$id?>&nome=<?=cl($nome)?>'>Alterar os horários &gt;&gt;</a></p>
