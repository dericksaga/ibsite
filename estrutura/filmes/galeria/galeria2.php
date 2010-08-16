<?

$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM galeria where id_cat='$idcat' AND id_franquia='$cidade' order by data desc";

$total_reg = "15";

if(!$page){
$page = "1";
}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg);

?>

Foram encontradas (<strong><? echo $tr;?></strong>) coberturas.<br>

<br>
<table border="0" cellpadding="1" cellspacing="0">
  <?
// Agora vamos montar o c&oacute;digo. Pegue o valor total de resultados: 
$total = mysql_num_rows($limite); 
// Defina o n&uacute;mero de colunas que voc&ecirc; deseja exibir: 
$colunas = "3"; 
//$colunas = "$qts_colunas"; 
// Agora vamos ao "truque": 
if ($total>0) { 
for ($i = 0; $i < $total; $i++) { 
if (($i%$colunas)==0) { 

$colspan = $colunas+$colunas+$colunas;
?>
  <tr>
    <? }?>
    <?
$dados= mysql_fetch_array($limite) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="1">
        <tr>
          <td width="60"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "javascript:AbreJanelaGaleria('$pasta/janela.php?id=$dados[id]&cidade=$cidade');";?>"><img src="<? echo "thumbs.php?w=58&h=58&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" style="border:1px solid #999999;"></a></td>
          <td width="154"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="60" bgcolor="#F2F2F2"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "javascript:AbreJanelaGaleria('$pasta/janela.php?id=$dados[id]&cidade=$cidade');";?>"> <? echo $novadata;?><br>
                      <b>
                      <?
$contatamanho = strlen($dados[nome]);
$quantidade = 10;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[nome], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[nome];
}
echo "$mensagem";
?>
                      </b> <br>
                      <?
$contatamanho = strlen($dados[local]);
$quantidade = 11;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[local], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[local];
}
echo "$mensagem";
?>
                      <br>
                [<?
$dir="images/eventos/$dados[id_franquia]/$dados[pasta]";

$dir1=opendir($dir);
$cont=0;
while ($res=readdir($dir1) ){
$tipo=explode(".",$res);
if ($tipo[1]=="jpg" || $tipo[1]=="JPG"){
$cont=$cont+1;
}
}
echo "<strong>".($cont)."</strong> Fotos";
?>] </a></td>
              </tr>
          </table></td>
        </tr>
    </table></td>
    <? }?>
  </TR>
  <? }?>
</table>


<table border="0" align="center" cellpadding="0" cellspacing="0">
  <TR> 
          <TD width="100" align="right" valign="top">
            <?
if($page > 1){
$anterior = $page -1;
$url = "?pg=$pg&page=$anterior";
echo "<a href='$url'>« Anterior</a>&nbsp;|";
} else {
echo "<font color='$corcelula2'>« Anterior</font>&nbsp;|";
}
?>
</TD>
    <TD align="center">
      <? 
for($x=1; $x<=$tp; $x++){
$url = "?pg=$pg&page=$x";
  if ($x==$page) {
  echo "<font color='$coronmouse'><b>$x</b></font>|";
  } else {
  echo "<a href='$url'>$x</a>|";
  }
} 
?>
</TD>
          <TD width="100" align="left" valign="top">
            <?
if($tp > $page){
$proxima = $page +1;
$url = "?pg=$pg&page=$proxima";
echo "&nbsp;<a href='$url'>Próxima »</a>";
} else {
echo "&nbsp;<font color='$corcelula2'>Próxima »</font>";
}
?>
</TD>
  </TR>
</table>
<br>
<br>

