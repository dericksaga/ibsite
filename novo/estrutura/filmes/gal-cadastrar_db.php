<?
$id_franquia = $_POST[id_franquia];
$id_cat = $_POST[id_cat];
$nome = $_POST[nome];
$data = "$_POST[ano]-$_POST[mes]-$_POST[dia]";
$local = $_POST[local];
$pasta = $_POST[pasta];
$foto01 = $_POST[foto01];
$co1 = $_POST[comentario1];
$foto02 = $_POST[foto02];
$co2 = $_POST[comentario2];
$foto03 = $_POST[foto03];
$co3 = $_POST[comentario3];
$foto04 = $_POST[foto04];
$co4 = $_POST[comentario4];
$foto05 = $_POST[foto05];
$co5 = $_POST[comentario5];
$foto06 = $_POST[foto06];
$co6 = $_POST[comentario6];

$dir  = "../images/filmes/$pasta";
echo $dir;
// inicia criação de pasta
if(!empty($pasta)){
$criapasta = @mkdir("$dir", 0777);
			 @chmod("$dir", 0777);
}
// fim da criação da pasta

copy("index_fotos.html",$dir."/index.html"); // envia arquivo index q redireciona pro site 

// verifica se pasta foi criada e se sim, envia foto e cadastra no bd
if($criapasta == true){
	$uploaddir="$dir/";
		if($foto01 != "none 	") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
			$varfoto01 = $_FILES['foto01']['name'];
			}
		}
		if($foto02 != "none") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto02']['tmp_name'], $uploaddir . $_FILES['foto02']['name'])) {
			$varfoto02 = $_FILES['foto02']['name'];
			}
		}
		if($foto03 != "none") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto03']['tmp_name'], $uploaddir . $_FILES['foto03']['name'])) {
			$varfoto03 = $_FILES['foto03']['name'];
			}
		}
		if($foto04 != "none") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto04']['tmp_name'], $uploaddir . $_FILES['foto04']['name'])) {
			$varfoto04 = $_FILES['foto04']['name'];
			}
		}
		if($foto05 != "none") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto05']['tmp_name'], $uploaddir . $_FILES['foto05']['name'])) {
			$varfoto05 = $_FILES['foto05']['name'];
			}
		}
		if($foto06 != "none") {// verifica campo arquivo
			if(move_uploaded_file($_FILES['foto06']['tmp_name'], $uploaddir . $_FILES['foto06']['name'])) {
			$varfoto06 = $_FILES['foto06']['name'];
			}
		}
// termina a função para enviar a foto

$sql=mysql_query("UPDATE filmes_dados SET cartaz='$varfoto01',imgdestaque='$varfoto02',cena1='$varfoto03',cena2='$varfoto04',cena3='$varfoto05', cena4='$varfoto06' WHERE id='$pasta'");
$id = mysql_insert_id();
?>
<h3>Fotos  cadastradas com sucesso!</h3>
<p>Em seguida, cadastre os horários de exibição deste filme.</p>
<br>
<meta http-equiv="refresh" content="3;URL=?pg=../estrutura/filmes/hora.php&id=<?=$pasta?>&nome=<?=$_POST[nome]?>">
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
<a href='?pg=../estrutura/filmes/hora.php&id=<?=$pasta?>&nome=<?=cl($_POST[nome])?>'>Avançar</a>
<? } else {?>
<h3><font color="#FF0000">Erro ao Cadastrar Fotos!</font></h3>
Entre em contato com o administrador do sistema. 

<br>
<br>

<? }?> 