<?
$logo = "../../images/layout/logo_fotos02.jpg";//endereço da sua logomarca
$file = $_GET['imagem'];//endereço da imagem
// $file vem por query-string ou post, contendo nome do arquivo

$new_w = (int)$_GET["w"];
$new_h = (int)$_GET["h"];
//$new_w=320; //nova largura maxima da foto 
//$new_h=240; //nova altura maxima da foto

header("Content-type: image/jpeg");
//$extensao=substr($file, -3);    
$dst_img=imagecreatetruecolor($new_w,$new_h);

//if ($extensao=="jpg"){
$src_img=imagecreatefromjpeg($file); //mude a pasta
//}else{
//$src_img=imagecreatefrompng($file);
//}
$src2_img=imagecreatefromjpeg($logo); //esse é meu logotipo
$insert_x = imagesx($src2_img);
$insert_y = imagesy($src2_img);

imagecopyresampled($dst_img,$src_img,0,0,0,0,$new_w,$new_h,imagesx($src_img),imagesy($src_img));

//imagecopymerge($original, $meu_logo, $imagem_x-($logo_x), $imagem_y-($logo_y+5), 0, 0, $logo_x, $logo_y, 50); 

imagecopymerge($dst_img,$src2_img,0,150,0,0,$insert_x,$insert_y,55); //posiciona o logotipo
imagejpeg($dst_img, $novonome, 100 ); //gera um jpeg com o logotipo

?>