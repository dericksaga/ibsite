<form action="?mode=zip" method="post" enctype="multipart/form-data">
  <input name="fotos" type="file" id="fotos">
  <input type="submit" name="Submit" value="Submit">
</form>

<?

$fotos = "teste.zip";
// Caso arquivos vieram em um zip
if($mode=='zip')
{
if($zip = zip_open($_FILES['fotos']['tmp_name']))
{
    while ($zip_entry = zip_read($zip)) 
 {
        $nome = zip_entry_name($zip_entry);
  if (zip_entry_open($zip, $zip_entry, "r")) 
  {
            $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
   file_put_contents('temp/to_download/fotos/'.$folder.'/'.$nome, $buf);
            zip_entry_close($zip_entry);
        }
    }
    zip_close($zip);
}
}
?>
