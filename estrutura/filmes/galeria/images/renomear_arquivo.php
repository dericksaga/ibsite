<?
$var1 = "$caminho/$nomeantigo";
$var2 = "$caminho/$nomenovo";
rename("$var1", "$var2");
?>
<meta http-equiv="refresh" content="1;URL=?acao=listar-fotos"><center><br><br>
<font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>">O Arquivo <strong><? echo $nomeantigo?></strong> 
 foi renomeado para <strong><? echo $nomenovo?></strong> com sucesso!</font> 
</center>
