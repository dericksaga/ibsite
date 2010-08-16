<?
    header("Content-type: image/jpeg");

    $im       = imagecreatefromjpeg($_GET['imagem']);
    $largurao = imagesx($im);
	$alturao  = imagesy($im);
    $largurad = "400";
	$alturad  = ($alturao*$largurad)/$largurao;

	$nova     = imagecreatetruecolor($largurad,$alturad);
	imagecopyresampled($nova,$im,0,0,0,0,$largurad,$alturad,$largurao,$alturao);
    imagejpeg($nova);
    imagedestroy($nova);
	imagedestroy($im);
?>

