<?

if($caminho != ""){
$dir = "$caminho/$nomedapasta";
} else {
$dir = "$caminho/$nomedapasta";
}

$dir1=opendir("$dir");
while ($res=readdir($dir1)){
if ($res!='' && $res!='.' && $res!='..'){
$url = "$dir/$res";
@unlink("$url");
}}
@rmdir ("$dir");
?>
<meta http-equiv="refresh" content="1;URL=?acao=fotos-excluir">
<center><br>
  <br>
<font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>">A pasta <strong><? echo $nomedapasta?></strong> 
 foi excluída com sucesso!</font> 
</center>
 

