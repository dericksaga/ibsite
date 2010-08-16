<?
$dt = date("Y-m-d");
$sql = mysql_query("SELECT * FROM agenda WHERE id_franquia='$cidade' AND data>='$dt' order by data LIMIT $limite");
$total = mysql_num_rows($sql);

if($total > 0){
?>
<table width="204"  border="0" cellspacing="0" cellpadding="3">
  <? while($dados=mysql_fetch_array($sql)){?>
  <tr>
                  <td><? if($dados[imagem] != "") {
echo "<img align='left' src='thumbs.php?w=48&h=48&imagem=images/agenda/$dados[imagem]' border=1>";
}?>
<? if($limite == "1"){ echo "<font class='titulos'>AGENDA</font><br>";}?>
<? if($limite != "1"){ $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]<br>"; }?>
<a href="?pg=agenda">
<b><?=$dados[titulo]?></b></a>           

				  </td>
                </tr>
				<tr><td height="1" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
				<? }?>
</table>
			  
<? } else {?>
Nenhum registro encontrado!
<? }?>		 