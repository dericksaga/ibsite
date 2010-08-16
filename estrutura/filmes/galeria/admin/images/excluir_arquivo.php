<?
$url = "$caminho/$nomedoarquivo";
unlink("$url");
?>
<meta http-equiv="refresh" content="1;URL=?acao=fotos-excluir&caminho=<? echo $caminho?>">
<center><br>
<br>
<font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>">O arquivo <strong><? echo $nomedoarquivo?></strong> 
 foi excluído com sucesso!</font> 
</center>
 

