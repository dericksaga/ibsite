<?
$acao = $_POST[acao];
$pasta = $_POST[pasta];
$foto01 = $_POST[foto01];
$foto02 = $_POST[foto02];
$foto03 = $_POST[foto03];
$foto04 = $_POST[foto04];
$foto05 = $_POST[foto05];
$fotos_zip = $_POST[fotos_zip];

$dir2="../images/eventos/$idfranquia/$pasta";
//echo "$dir2<br>";

$uploaddir="$dir2/";
//echo $uploaddir;
?>
<h3><strong>Fotos Enviadas</strong></h3>
<? if($acao == "zip") {?>
  <Table align="center" cellpadding="2" cellspacing="0">

<tr> 
          <td width="60" align="right" valign="middle" bgcolor="#e5e5e5" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">Fotos:</td>
          <td width="300" valign="middle" bgcolor="#e5e5e5" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">
<? 	  
// DESCOMPACTA OS ARQUIVOS
$arquivo = $_FILES['fotos_zip']['name']; // pega nome do arquivo 
$arquivotemp = $_FILES['fotos_zip']['tmp_name']; // pega nome temporario do arquivo 
	if(copy($arquivotemp,$uploaddir.$arquivo)){ // faz copia do arquivo zipado
		require_once('zip.lib.php'); //requer o arquivo, deve estar na mesma pasta
		$archive = new PclZip($uploaddir.$arquivo); 
		$list = $archive->extract(PCLZIP_OPT_PATH, "$dir2",PCLZIP_OPT_REMOVE_ALL_PATH); // extrai todos arquivos
		unlink($uploaddir.$arquivo); // exclui o arquivo zip mandado
echo "<strong>$arquivo</strong> enviado com sucesso!";
// FIM DO DESCOMPACTA OS ARQUIVOS
}
?>

</td>
</tr>

</table>
<? }?>


<? if($acao == "normal") {?>
<Table align="center" cellpadding="2" cellspacing="0">

<tr> 
          <td width="60" align="right" valign="middle" bgcolor="#e5e5e5" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">Foto 01:</td>
          <td width="300" valign="middle" bgcolor="#e5e5e5" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">
		  <? if($foto01 != "none") {		  
		  $arquivo = $_FILES['foto01']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
echo "&nbsp;";
//  print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto01']['tmp_name'],$uploaddir.$_FILES['foto01']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}
?>

</td>
</tr>

<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 02:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto02 != "none") {
$arquivo = $_FILES['foto02']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
echo "&nbsp;";  // print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto02']['tmp_name'],$uploaddir.$_FILES['foto02']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr bgcolor="#e5e5e5"> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 03:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto03 != "none") {
$arquivo = $_FILES['foto03']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
echo "&nbsp;"; //  print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto03']['tmp_name'],$uploaddir.$_FILES['foto03']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 04:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto04 != "none") {
$arquivo = $_FILES['foto04']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
echo "&nbsp;";//   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto04']['tmp_name'],$uploaddir.$_FILES['foto04']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr bgcolor="#e5e5e5"> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 05:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto05 != "none") {
$arquivo = $_FILES['foto05']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
echo "&nbsp;";  // print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto05']['tmp_name'],$uploaddir.$_FILES['foto05']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>

</table>
<? }?>
<br>   
<a href='?pg=../estrutura/galeria/admin/listar_fotos.php&caminho=<?=$uploaddir?>'>Voltar</a>    