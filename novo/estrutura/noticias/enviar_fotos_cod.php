  <?
$id = $_POST[id];
$foto01 = $_POST[foto01];
$foto02 = $_POST[foto02];
$foto03 = $_POST[foto03];
$foto04 = $_POST[foto04];
$foto05 = $_POST[foto05];
$foto06 = $_POST[foto06];
$foto07 = $_POST[foto07];
$foto08 = $_POST[foto08];
$foto09 = $_POST[foto09];
$foto10 = $_POST[foto10];

$uploaddir="../images/noticias/$id/";
?>
<h3><strong>Fotos Enviadas</strong></h3>
  <Table align="center" cellpadding="2" cellspacing="0">

<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">Foto 01:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc">
		  <? if($foto01 != "none") {		  
		  $arquivo = $_FILES['foto01']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
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
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto02']['tmp_name'],$uploaddir.$_FILES['foto02']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 03:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto03 != "none") {
$arquivo = $_FILES['foto03']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
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
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto04']['tmp_name'],$uploaddir.$_FILES['foto04']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 05:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto05 != "none") {
$arquivo = $_FILES['foto05']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto05']['tmp_name'],$uploaddir.$_FILES['foto05']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 06:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto06 != "none") {
$arquivo = $_FILES['foto06']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto06']['tmp_name'],$uploaddir.$_FILES['foto06']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 04:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto07 != "none") {
$arquivo = $_FILES['foto07']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto07']['tmp_name'],$uploaddir.$_FILES['foto07']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 08:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto08 != "none") {
$arquivo = $_FILES['foto08']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto08']['tmp_name'],$uploaddir.$_FILES['foto08']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>


<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 09:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto09 != "none") {
$arquivo = $_FILES['foto09']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto09']['tmp_name'],$uploaddir.$_FILES['foto09']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>

<tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc">Foto 10:</td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"><? if($foto10 != "none") {
$arquivo = $_FILES['foto10']['name'];
$dir = "$uploaddir$arquivo";
if (file_exists($dir)) {
   print "<strong>$arquivo</strong> já existe!";
} else {
if (copy($_FILES['foto10']['tmp_name'],$uploaddir.$_FILES['foto10']['name'])) {
echo "<strong>$arquivo</strong> enviado com sucesso!";
}}
}?></td>
</tr>

</table>

<br>   
<a href='?pg=../noticias/enviar_fotos_form.php'>Voltar</a>    