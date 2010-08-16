<?
$cor = $_POST[cor];
$exibicao = $_POST[exibicao];
$foto01 = $_POST[foto01];
$foto02 = $_POST[foto02];
$foto03 = $_POST[foto03];
$foto04 = $_POST[foto04];
$foto05 = $_POST[foto05];
$foto06 = $_POST[foto06];
$foto07 = $_POST[foto07];
$foto08 = $_POST[foto08];
$url1   = $_POST[url1];
$url2   = $_POST[url2];
$url3   = $_POST[url3];
$url4   = $_POST[url4];
$url5   = $_POST[url5];
$url6   = $_POST[url6];
$url7   = $_POST[url7];


$uploaddir="../images/estrutura/1/";

$sql = mysql_query("SELECT * FROM conteudo_estrutura WHERE id=1");
while ($dados=mysql_fetch_array($sql)) {

if($_POST['novafoto10'] == "nada"){
$varfoto1 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto10'] == "sim"){
if (copy($_FILES['foto01']['tmp_name'], $uploaddir . $_FILES['foto01']['name'])) {
$varfoto1 = $_FILES['foto01']['name'];
unlink($uploaddir.$dados[foto01]);
}
}
elseif($_POST['novafoto10'] == "nao"){
$varfoto1 = "$dados[foto01]";
}

			if($_POST['novafoto20'] == "nada"){
			$varfoto2 = "";
			}
			// verifica se o campo foto_antiga preenchido
			elseif($_POST['novafoto20'] == "sim"){
			if (copy($_FILES['foto02']['tmp_name'], $uploaddir . $_FILES['foto02']['name'])) {
			$varfoto2 = $_FILES['foto02']['name'];
			unlink($uploaddir.$dados[foto02]);
			}
			}
			elseif($_POST['novafoto20'] == "nao"){
			$varfoto2 = "$dados[foto02]";
			}

if($_POST['novafoto30'] == "nada"){
$varfoto3 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto30'] == "sim"){
if (copy($_FILES['foto03']['tmp_name'], $uploaddir . $_FILES['foto03']['name'])) {
$varfoto3 = $_FILES['foto03']['name'];
unlink($uploaddir.$dados[foto03]);
}
}
elseif($_POST['novafoto30'] == "nao"){
$varfoto3 = "$dados[foto03]";
}

			if($_POST['novafoto40'] == "nada"){
			$varfoto4 = "";
			}
			// verifica se o campo foto_antiga preenchido
			elseif($_POST['novafoto40'] == "sim"){
			if (copy($_FILES['foto04']['tmp_name'], $uploaddir . $_FILES['foto04']['name'])) {
			$varfoto4 = $_FILES['foto04']['name'];
			unlink($uploaddir.$dados[foto04]);
			}
			}
			elseif($_POST['novafoto40'] == "nao"){
			$varfoto4 = "$dados[foto04]";
			}

if($_POST['novafoto50'] == "nada"){
$varfoto5 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto50'] == "sim"){
if (copy($_FILES['foto05']['tmp_name'], $uploaddir . $_FILES['foto05']['name'])) {
$varfoto5 = $_FILES['foto05']['name'];
unlink($uploaddir.$dados[foto05]);
}
}
elseif($_POST['novafoto50'] == "nao"){
$varfoto5 = "$dados[foto05]";
}

			if($_POST['novafoto60'] == "nada"){
			$varfoto6 = "";
			}
			// verifica se o campo foto_antiga preenchido
			elseif($_POST['novafoto60'] == "sim"){
			if (copy($_FILES['foto06']['tmp_name'], $uploaddir . $_FILES['foto06']['name'])) {
			$varfoto6 = $_FILES['foto06']['name'];
			unlink($uploaddir.$dados[foto06]);
			}
			}
			elseif($_POST['novafoto60'] == "nao"){
			$varfoto6 = "$dados[foto06]";
			}

if($_POST['novafoto70'] == "nada"){
$varfoto7 = "";
}
// verifica se o campo foto_antiga preenchido
elseif($_POST['novafoto70'] == "sim"){
if (copy($_FILES['foto07']['tmp_name'], $uploaddir . $_FILES['foto07']['name'])) {
$varfoto7 = $_FILES['foto07']['name'];
unlink($uploaddir.$dados[foto07]);
}
}
elseif($_POST['novafoto70'] == "nao"){
$varfoto7 = "$dados[foto07]";
}

			if($_POST['novafoto80'] == "nada"){
			$varfoto8 = "";
			}
			// verifica se o campo foto_antiga preenchido
			elseif($_POST['novafoto80'] == "sim"){
			if (copy($_FILES['foto08']['tmp_name'], $uploaddir . $_FILES['foto08']['name'])) {
			$varfoto8 = $_FILES['foto08']['name'];
			unlink($uploaddir.$dados[foto08]);
			}
			}
			elseif($_POST['novafoto80'] == "nao"){
			$varfoto8 = "$dados[foto08]";
			}
}

$sql = mysql_query("UPDATE conteudo_estrutura SET cor_fundo = '$cor', exibicao = '$exibicao', foto01 = '$varfoto1', foto02 = '$varfoto2', foto03 = '$varfoto3', foto04 = '$varfoto4', foto05 = '$varfoto5', foto06 = '$varfoto6', foto07 = '$varfoto7', foto08 = '$varfoto8', url1 = '$url1', url2 = '$url2', url3 = '$url3', url4 = '$url4', url5 = '$url5', url6 = '$url6', url7 = '$url7' WHERE id=1");
?>

<h3>Conteúdo Alterado com sucesso!</h3>

<a href='?pg=../estrutura/conteudo/alterar_estrutura.php'>Voltar</a>
