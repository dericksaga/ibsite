<?
$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM noticias_dados WHERE idcat=1 or idcat=2 or idcat=30 or idcat=36 order by data desc";

$palavra = "Artigo(s)";

$total_reg = "6";

if(!$page){
$page = "1";
}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg);

if(mysql_num_rows($todos)>0){
?> 
<table width="98%" align="center" cellpadding="0" cellspacing="0">


<tr><td height="3" colspan="2"></td></tr>
<tr>
    <td height="1" colspan="2"></td>
  </tr>
<tr><td height="3" colspan="2"></td></tr>

<? while ($dados=mysql_fetch_array($limite)) {
?>
<TR>
    <TD align='left' valign="middle">&bull; <a href=?pg=noticia&id=<? echo $dados[id]?>>
      <? $data = explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]&nbsp;  - &nbsp;<i> $dados[nome]</i><br><strong>$dados[titulo]</strong>";?>
    </a></span></Td>
</TR>
<tr><td height="3" colspan="2"></td></tr>
<tr><td height="1" colspan="2" background="images/layout/barrinha_divisao_horizontal.gif"></td></tr>
<tr><td height="3" colspan="2"></td></tr>
<? }?>
</table>


<? } else {?>
<BR>
 
<table width="98%" align="center" cellpadding="0" cellspacing="0">
  <TR>
    <TD align="center" valign="bottom"> 
      <br>
      <br>
      <br>
      <br>
      Nenhuma <b><? echo $palavra?></b> encontrada em <br>
      nosso banco de dados!<br>
      <br>
      <br>    </td>
  </tr>
</table>
<? } ?>
