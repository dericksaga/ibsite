<?

$id = $_POST[iddafoto];

// remove image from listing

	// get filenames from database
	$sql = mysql_query("SELECT image, thumb FROM fotos WHERE id=$id");
	$data = mysql_fetch_array($sql);

	// delete image and thumbnail
	if(is_file("../images/fotos/$data[image]")) {
	unlink("../images/fotos/$data[image]");
	}
	if(is_file("../images/miniaturas/$data[thumb]")) {
	unlink("../images/miniaturas/$data[thumb]");
	}
	$query = "DELETE FROM fotos WHERE id='$id'";
	
	mysql_query($query);
	echo "<script language='JavaScript'> window.location='?pg=../estrutura/galeria/administrar.php&id=$_GET[idgaleria]'; </script>";
	exit();

?>

<br><br><br><br><b>Ocorreu um erro.</b><br><br><br>
Se o problema persistir, entre em <br>contato com o administrador do sistema.