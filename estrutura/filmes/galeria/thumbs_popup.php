<?
$logo = "../../images/layout/logo_popup.jpg"; // endereço da sua logomarca
$file = $_GET['imagem']; // $file vem por query-string ou post, contendo nome do arquivo

header("Content-type: image/jpeg");

$foto     =   imagecreatefromjpeg($_GET[imagem]);
$largura_foto = imagesx($foto);//LARGURA
$altura_foto = imagesy($foto);//ALTURA
	if($largura_foto > $altura_foto){ // se largura for maior q altura
		$new_w = 452;//(int)$_GET["w"];
		$new_h = 340;//(int)$_GET["h"];
		$PosicaoLogoW = 0;
		$PosicaoLogoH = 295;
	} else { // senaum joga a imagem com 240 de altura com largura 180
		$new_w = 340;
		$new_h = 452;
		$PosicaoLogoW = -160;
		$PosicaoLogoH = 412;
	}
 
$dst_img=imagecreatetruecolor($new_w,$new_h);

$src_img=imagecreatefromjpeg($file); // pega a imagem

$extensao=substr($logo, -3);  // pega extansao da logo

if ($extensao=="jpg" OR $extensao=="JPG"){
$src2_img=imagecreatefromjpeg($logo); //logotipo em jpg
}
if ($extensao=="gif" OR $extensao=="GIF"){
$src2_img=imagecreatefromgif($logo); //logotipo em gif
}
if ($extensao=="png" OR $extensao=="PNG"){
$src2_img=imagecreatefrompng($logo); //logotipo em png
}

//$tira_fundo = imagecolorallocate($src2_img, 0, 0, 0); //pega a imagem e tira a cor indicada pelo rgb
//imagecolortransparent($src2_img, $tira_fundo); //agora vc deixa a cor rgb transparente: 

$insert_x = imagesx($src2_img);
$insert_y = imagesy($src2_img);

imagecopyresampled($dst_img,$src_img,0,0,0,0,$new_w,$new_h,imagesx($src_img),imagesy($src_img));

//imagecopymerge($original, $meu_logo, $imagem_x-($logo_x), $imagem_y-($logo_y+5), 0, 0, $logo_x, $logo_y, 50); 

imagecopymerge($dst_img,$src2_img,$PosicaoLogoW,$PosicaoLogoH,0,0,$insert_x,$insert_y,75); //posiciona o logotipo
imagejpeg($dst_img, NULL, 100); //gera um jpeg com o logotipo
?>