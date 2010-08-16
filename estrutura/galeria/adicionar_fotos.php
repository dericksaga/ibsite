<?
$coment = $_POST[coment];
$evento = $_POST[evento];
$fotodia = $_POST[fotodia];
require 'funcoes.php';
$dbimg = 'fotos';
$maxx = 90;
$maxy = 70;

// add image to images table
echo $image;
if($image) {
	// generate icode
	$icode = substr(time().rand(10000,99999),-15);

	// copy image to temp folder
	$tempname = '../temp/'.$icode.'TEMP.JPG';
	copy($image, $tempname);
	unlink($image);
	
	// get iamge properties
	$properties = getimagesize($tempname);
	if($properties[2] == 2) { // if the image is a .jpg
		$source = imagecreatefromjpeg($tempname); // create image identifier
		$imagex = imagesx($source);
		$imagey = imagesy($source);
		
		// copy image to images folder
		$imagename = $icode.'IMG.JPG'; // this will be stored in db
		$image_loc = "../images/fotos/$imagename";
		copy($tempname, $image_loc);
		unlink($tempname);
		
		// resize the image if neccessary
		if($imagex > 5800) {
			$newy = round((580 * $imagey) / $imagex);
			//echo "imagex = $imagex<br>imagey = $imagey<br>newy = $newy<br>"; exit(); // TEST
			resize($image_loc, 580, $newy, $image_loc);
		}
		
		// create thumbnail
		$thumbname = $icode.'TMB.JPG'; // this will be stored in db
		$thumb_loc = "../images/miniaturas/$thumbname";

		$thumbx = $maxx;
		$thumby = round(($imagey * $thumbx) / $imagex);
		
		if($thumby > $maxy) {
			$thumbx = round(($thumbx * $maxy) / $thumby);
			$thumby = $maxy;
		}
		
		if(resize($image_loc, $thumbx, $thumby, $thumb_loc)) {
			// store data
			$query = "INSERT INTO $dbimg VALUES('','$evento','$thumbname','$imagename',$fotodia,'$coment','','','')";

			mysql_query($query);
			
			// update numimages
			//$query = "UPDATE $dbvin SET numimages=numimages+1 WHERE codigo='10'";
			//mysql_query($query);
			
			// jump back to summary page
			echo $_GET[imovel];
			echo "<script language='JavaScript'> window.location='?pg=../estrutura/galeria/administrar.php&id=$_GET[id]'; </script>";
			exit();
		}
	} @unlink($tempname); // delete the temp file if an error occurs
}
?>

<link href="css/estilos.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(design/pattern.jpg);
	background-color: #FFFFFF;
}
-->
</style>


<table width=700 height=400 border=0 align="center" cellpadding=3 cellspacing=0 bgcolor="#DDDEE2" class='trim'>
	<tr>
		<td align='center' valign='middle'>
		<b>Ocorreu um erro.</b></td>
  </tr>
</table>
<table width=700 border=0 align="center" cellpadding=5 cellspacing=0>
<tr><td align='center'></td></tr></table>

<?=$coment ?>
