<div align="left">Outras Fotos</div>
  <?
$id = $_GET[id];
$dir = "images/noticias/$id/";
$dirhandle = opendir($dir);
$fotos = array();
while ($file = readdir($dirhandle)) {
  $files = $file;
  $arr_basename=explode(".",$files); 
  $file_type=strtolower("$arr_basename[1]");
  if ($file_type == "jpg")
  {
    $fotos[] = $files;
  }
}
closedir($dirhandle);

sort($fotos);
// para exibir em ordem alfabética
for($i=0;$i<count($fotos);$i++)
// para exibir em ordem alfabética inversa
//for ($i=count($fotos);$i>0;$i--)
{
?>
  <a href="javascript:fotos_noticias('<? echo "estrutura/noticias/ver_fotos.php?dir=../../$dir&foto=$fotos[$i]";?>');">
  <img src="<? echo "thumbs.php?w=55&h=55&imagem=$dir$fotos[$i]";?>" vspace="1" border="1"></a> 

<?
}
?>