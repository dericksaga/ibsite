<?
//include("config.php");

if($sessao == "1"){
//$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' order by id desc");
$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' AND id_franquia='$cidade' order by data desc LIMIT 3");
if(mysql_num_rows($sql) == 0){
echo "<br>
<br>
<br>
<br>
<br>
<br>
Nenhuma <b>Cobertura</b> Encontrada!";
} else { 
?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>


<br />
<table width="198" border="0" align="center" cellpadding="1" cellspacing="0">
  <?
// Agora vamos montar o código. Pegue o valor total de resultados: 
$total = mysql_num_rows($sql); 
// Defina o número de colunas que você deseja exibir: 
$colunas = "1"; 
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
$dados= mysql_fetch_array($sql) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
	
	<table width="257"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="60"><div align="right"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><img src="<? echo "thumbs.php?w=60&h=60&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" style="border:1px solid silver;"></a></div></td>
                          <td><table width="99%" height="60"  border="0" align="right" cellpadding="0" cellspacing="0">
                              
                              <tr>
                                <td height="44">
								  <p><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"></a><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>">
                                  <?
$contatamanho = strlen($dados[nome]);
$quantidade = 20;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[nome], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[nome];
}
echo "<b><font class='titulos' style='text-transform:uppercase;'>$mensagem</font></b>";
?>
                                  <br>
                                  
<font style='text-transform:uppercase; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#000000;' ><?
$contatamanho = strlen($dados[local]);
$quantidade = 20;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[local], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[local];
}
echo "$mensagem";
?>
                                  <br />
                                  <strong><? echo $novadata;?></strong></a></p>							    </td>
                              </tr>
                          </table></td>
                        </tr>
      </table>	</td>
    <? }?>
  </TR>
    <? }?>
</table>


<? 
}
}

if($sessao == "3"){
//$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' order by id desc");
$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' AND id_franquia='$cidade' AND destaque='S' order by data desc LIMIT $limite");
?>

<table border="0" cellpadding="1" cellspacing="0">
  <?
// Agora vamos montar o código. Pegue o valor total de resultados: 
$total = mysql_num_rows($sql); 
// Defina o número de colunas que você deseja exibir: 
$colunas = "$qt_colunas"; 
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
$dados= mysql_fetch_array($sql) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
	
	<table width="100%"  border="0" cellspacing="0" cellpadding="1">
                        <tr>
                          <td width="60"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><img src="<? echo "thumbs.php?w=58&h=58&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" style="border:1px solid #000000;"></a></td>
                          <td width="154"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="60" bgcolor="#F2F2F2"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>">								<? echo $novadata;?><br>
								    <b><?
$contatamanho = strlen($dados[nome]);
$quantidade = 10;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[nome], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[nome];
}
echo "$mensagem";
?></b>
<br>
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
?>]
</a></td>
                              </tr>
                          </table></td>
                        </tr>
      </table>	</td>
    <? }?>
  </TR>
    <? }?>
</table>


<? } 

if($sessao == "2"){

$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' AND id_franquia='$cidade' order by data desc");
$total = mysql_num_rows($sql); 
?>
Foram encontradas (<strong><? echo $total;?></strong>) coberturas.<br>
<br>

<table border="0" cellpadding="1" cellspacing="0">
  <?
// Agora vamos montar o c&oacute;digo. Pegue o valor total de resultados: 
$total = mysql_num_rows($sql); 
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
$dados= mysql_fetch_array($sql) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="1">
        <tr>
          <td width="60"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><img src="<? echo "thumbs.php?w=58&h=58&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" style="border:1px solid #000000;"></a></td>
          <td width="154"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="60" bgcolor="#F2F2F2"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"> <? echo $novadata;?><br>
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
<? }

if($sessao == "4"){
//$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' order by id desc");
$sql = mysql_query("SELECT * FROM galeria where id_cat='$idcat' AND id_franquia='$cidade' order by data desc LIMIT 1");
if(mysql_num_rows($sql) == 0){
if($idcat == 2){
$palavra = "Nenhuma <b>Gata Top</b> encontrada!";
}
if($idcat == 3){
$palavra = "Nenhum <b>Gato Top</b> encontrado!";
}
echo "
<table width='170'  border='0' cellspacing='0' cellpadding='2'>
        <tr>
          <td width='74'></td>
          <td valign='middle'>$palavra</td>
        </tr>
</table>
";
} else { 
?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>


<table width="170" border="0" align="center" cellpadding="2" cellspacing="0">
  <?
// Agora vamos montar o código. Pegue o valor total de resultados: 
$total = mysql_num_rows($sql); 
// Defina o número de colunas que você deseja exibir: 
$colunas = "1"; 
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
$dados= mysql_fetch_array($sql) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
	
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="74"><img src="<? echo "thumbs.php?w=60&h=60&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" align="left" style="border:1px solid #000000;"></td>
                          <td valign="middle">
						    <?
$contatamanho = strlen($dados[nome]);
$quantidade = 17;
if($contatamanho > $quantidade){
$mensagem = substr_replace($dados[nome], "...", $quantidade, $contatamanho - $quantidade);
} else {
$mensagem = $dados[nome];
}
echo "<b>$mensagem</b>";
?>
                            <br>
                            <i>Por: <b>
                            <?=$dados[por];?>
                            </b></i> <br>
                            <!--[<?
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
?>]</a><br>-->
                            <div align="right"><a href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><b>&raquo;</b> Ver Ensaio</a></div></td>
                        </tr>
      </table>	</td>
    <? }?>
  </TR>
    <? }?>
</table>
<? 
}
}

if($sessao == "5"){

$sql = mysql_query("SELECT * FROM galeria where id_cat!='1' AND id_franquia='$cidade' order by data desc");
$total = mysql_num_rows($sql); 
?>
Foram encontrados (<strong><? echo $total;?></strong>) ensaios.<br>
<br>

<table border="0" cellpadding="1" cellspacing="0">
  <?
// Agora vamos montar o c&oacute;digo. Pegue o valor total de resultados: 
$total = mysql_num_rows($sql); 
// Defina o n&uacute;mero de colunas que voc&ecirc; deseja exibir: 
$colunas = "2"; 
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
$dados= mysql_fetch_array($sql) ;
$data = explode("-", $dados[data]);
$novadata = "$data[2]/$data[1]/$data[0]";
?>
    <td align="center" valign="top">
      <table width="100%"  border="0" cellspacing="0" cellpadding="1">
        <tr>
          <td width="60"><a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><img src="<? echo "thumbs.php?w=58&h=58&imagem=images/eventos/$dados[id_franquia]/$dados[pasta]/$dados[foto01]";?>" border="0" style="border:1px solid #000000;"></a></td>
          <td width="154"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="60" bgcolor="#F2F2F2">
				<b><font class='titulos'><? if($dados[id_cat]==2){ echo "GATA";} else { echo "GATO";}?></font></b>
<a title="<? echo "$novadata - $dados[nome] - $dados[local]";?>" href="<? echo "?pg=foto&caminho=images/eventos/1/$dados[pasta]&nome=$dados[nome]&data=$dados[data]&local=$dados[local]";?>"><br> 
                      <b>
                      <?
$contatamanho = strlen($dados[nome]);
$quantidade = 30;
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
$quantidade = 30;
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
<? }?>
</font>