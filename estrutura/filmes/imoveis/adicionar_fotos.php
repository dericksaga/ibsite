<?
#########################################################
#Copyright © RevendAuto. Todos os direitos reservados.  #
#########################################################
#                                                       #
#  Programa        : Script PHP RevendAuto v 1.0        #
#  Autor/Tradutor  : Moisés Bach B.                     #
#  E-mail          : moisbach@gmail.com                 #
#  Versão          : 1.0                                #
#  Modificado em   : 01/08/2005                         #
#  Copyright ©     : RevendAuto                         #
#                 WWW.ANIMABUSCA.COM                    #
#########################################################
#ESTE SCRIPT NÃO PODE SER COPIADO SEM AUTORIZAÇÃO PRÉVIA#
#########################################################

require '../php/funcoes.php';
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
		if($imagex > 400) {
			$newy = round((400 * $imagey) / $imagex);
			//echo "imagex = $imagex<br>imagey = $imagey<br>newy = $newy<br>"; exit(); // TEST
			resize($image_loc, 400, $newy, $image_loc);
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
			$query = "INSERT INTO $dbimg VALUES('0','".$_GET[imovel]."','$thumbname','$imagename')";
			mysql_query($query);
			
			// update numimages
			//$query = "UPDATE $dbvin SET numimages=numimages+1 WHERE codigo='10'";
			//mysql_query($query);
			
			// jump back to summary page
			echo "<script language='JavaScript'> window.location='?pg=../estrutura/imoveis/mandafotos.php&recupera=".$_GET[imovel]."'; </script>";
			exit();
		}
	} @unlink($tempname); // delete the temp file if an error occurs
}
?>
<html>
<head>
<title>Painel de Controle RevendAuto - Adicionar fotos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(design/pattern.jpg);
	background-color: #FFFFFF;
}
-->
</style></head>

<body>

<table width=700 height=400 border=0 align="center" cellpadding=3 cellspacing=0 bgcolor="#DDDEE2" class='trim'>
	<tr>
		<td align='center' valign='middle'>
			<b>Ocorreu um erro.</b><br>
			<br>
			<a class='link' href='controle.php'><b>Clique aqui para voltar ao Painel de Controle</b></b></a>
		</td>
	</tr>
</table>
<table width=700 border=0 align="center" cellpadding=5 cellspacing=0>
<tr><td align='center'></td></tr></table>

</body>
</html>
