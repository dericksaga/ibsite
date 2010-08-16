 <table width="400" align="center" cellpadding="0" cellspacing="0">
   <TR>
      
    <TD align="center" height="30"><font color="<? echo $cortexto?>" size="<? echo $ttitulo?>" face="<? echo $fonte?>"><strong> 
      DIRETÓRIO DE DESTINO DAS FOTOS</strong></font></td>
   </tr>
</table>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
    <td align="center"> 
      <select name="nomedapasta" style="width:290;border:1px solid <? echo $cortexto?>" onChange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)">
<option selected>Selecione um Diretório</option>
<option>========================================</option>
<?
$rep = opendir('../eventos/images/galeria');
while ($file = readdir($rep)) {
if($file != '..' && $file !='.' && $file !=''){ 
 if (!is_dir($file)){?>
<option value="?acao=upload-form&nomedapasta=<? echo $file?>"><? echo $file?></option>
<?
 }
}
}
closedir($rep);
?>
</select></form>
      </td>
 </tr>
</table>
