<?
$sql = mysql_query("SELECT * FROM menu where nivel='$usernivel' order by id");
?>

<table width="100%" border="0" cellpadding="0" cellspacing="1">
  <?  while ($dados=mysql_fetch_array($sql)){?>
  <TR>
    <TD height="17" valign="middle" background="../images/layout/img_menu2.gif" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <strong><font color="white">
      <? if($dados[url] != ""){
		echo "<a href='$dados[url]'><font color='white'>$dados[nome]</font></a>";
		} else{
	    echo "$dados[nome]";}
	    ?></font>
        </strong></TD>
  </TR>
<?
if($dados[subcat] == "sim"){
$sql2 = mysql_query("SELECT * FROM menu_sub where nivel='$usernivel' AND id_menu='$dados[id]' order by id");
while ($dados2=mysql_fetch_array($sql2)){?>
	
    
  <TR> 
    <TD class="linkizinho" valign="middle" bgcolor="#F2F2F2" style="border-bottom:1px solid #999999; "><a href="<? echo "$dados2[url]";?>" target="<? echo $dados2[target]?>"><strong>&nbsp;</strong>&nbsp;- <? echo $dados2[nome]?></a></TD>
  </TR>

<? }?>
<? }?>
<? }?>
</table>
	

<img src="../images/gif.gif" width="170" height="1">