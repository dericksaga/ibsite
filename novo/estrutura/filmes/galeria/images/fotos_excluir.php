<table width="400" align="center" cellpadding="0" cellspacing="0">
  <TR> 
    <TD align="center" height="30"><font color="<? echo $cortexto?>" size="<? echo $ttitulo?>" face="<? echo $fonte?>"><strong>EXCLUIR 
      FOTOS</strong></font></td>
  </tr>
  <TR> 
    <TD height="25" align="center"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>">Total 
      de Fotos: <strong> 
      <?
if($caminho != ""){
$dir="$caminho";
} else {
$dir="../eventos/images/galeria";
}
$dir1=opendir($dir);
$cont=0;
while ($res=readdir($dir1) ){
$tipo=explode(".",$res);
if ($tipo[1]=="jpg" || $tipo[1]=="JPG"){
$cont=$cont+1;
}
}
print ($cont);
?>
      </strong></font></TD>
  </TR>
</table>

<Table border="0" align="center" cellpadding="2" cellspacing="0" style="border: 1px solid <? echo $cortexto?>">
  <TR align="center" bgcolor="<? echo $corcelula1?>"> 
    <TD width="324" height="15" style="border-right: 1px solid <? echo $corcelula2?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><strong>NOME 
      DA FOTO</strong></font></TD>
    <TD width="80" height="15" style="border-right: 1px solid <? echo $corcelula2?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><strong>EXCLUIR</strong></font></TD>
  </TR>
  <?
if($caminho == ""){
$caminho = '../eventos/images/galeria';
$rep = opendir($caminho);
while ($file = readdir($rep)) {
$tipo = filetype("$caminho/$file");
if($file != '..' && $file !='.' && $file !=''){ 
 if (!is_dir($file)){?>
  <TR> 
    <TD height="5" colspan="3"></TD>
  </TR>
  <tr bgcolor="<? echo $corcelula2?>"> 
    <td valign="middle" style="border-right: 1px solid <? echo $corcelula1?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"> 
      <? if($tipo == "dir"){ echo "<a href='?acao=fotos-excluir&caminho=$caminho/$file'><img src='../eventos/images/icone_pastinha.gif' width='16' height='14' border='0'> $file</a>";}
else { echo "<a href='$caminho/$file' target='_blank'><img src='../eventos/images/icone_img.gif' width='16' height='16' border='0'> $file</a>";}?>
      </font></strong> </font></td>
    <td align="center" valign="middle" style="border-right: 1px solid <? echo $corcelula1?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><a href="<? if($tipo != "dir"){ echo "?acao=arquivo-deleta&caminho=$caminho&nomedoarquivo=$file";
 } else { echo "?acao=dir-deleta&caminho=$caminho&nomedapasta=$file";}?>"> Excluir</a></font></td>
  </tr>
  <?
 }
}
}
closedir($rep);
?>
  <?
} else { 
$rep = opendir($caminho);
while ($file = readdir($rep)) {
$tipo = filetype("$caminho/$file");
if($file != '..' && $file !='.' && $file !=''){ 
 if (!is_dir($file)){?>
  <TR> 
    <TD height="5" colspan="4"></TD>
  </TR>
  <tr bgcolor="<? echo $corcelula2?>"> 
    <td valign="middle" style="border-right: 1px solid <? echo $corcelula1?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"> 
      <? if($tipo == "dir"){ echo "<a href='?acao=listar-fotos&caminho=$caminho/$file'><img src='../eventos/images/icone_pastinha.gif' width='16' height='14' border='0'> $file</a>";}
else { echo "<a href='$caminho/$file' target='_blank'><img src='../eventos/images/icone_img.gif' width='16' height='16' border='0'> $file</a>";}?>
      </font></strong> </font></td>
    <td align="center" valign="middle" style="border-right: 1px solid <? echo $corcelula1?>"><font color="<? echo $cortexto?>" size="<? echo $tfonte?>" face="<? echo $fonte?>"><a href="<? if($tipo != "dir"){ echo "?acao=arquivo-deleta&caminho=$caminho&nomedoarquivo=$file";
 } else { echo "?acao=dir-deleta&caminho=$caminho&nomedapasta=$file";}?>"> Excluir</a></font></td>

  </tr>
  <?
 }
}
}
closedir($rep);
}?>
</table>
<br>

