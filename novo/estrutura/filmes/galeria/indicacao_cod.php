<? include("../../config.php");

$data_envio = DATE('d/m/Y');
$hora_envio = DATE('H:i:s');
$id = $_POST[id];

$nome = $_POST[nome];
$email = $_POST[email];
$nomepara = $_POST[nomepara];
$emailpara = $_POST[emailpara];

$url_foto  = $_POST[url_foto];
$link_galeria = $_POST[link_galeria];

$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);
$data = explode("-",$dados[data]);
$festa = "$dados[nome] - $data[2]/$data[1]/$data[0]";
$arquivo = "
<html>
<table width=100% border=0 align=left cellpadding=0 cellspacing=0>
  <tr>
    <TD><font size='1' face='Verdana, Tahoma, Arial'>Olá <strong>$nomepara</strong>,<BR>
      Seu amigo(a) <strong><a href='mailto:$email'>$nome</a></strong> lhe envio 
      uma foto.
	  <br><br>
	  <strong>$tsite</strong><br>
	  <a href='$usite'>$usite</a><br><br>
	  <a href='$link_galeria'>$festa</a></font></td>
</tr>
  <tr> 
    <td valign=middle><img src='$url_foto' width=320 border=1></td>
  </tr>
  <tr>
    <td><font size='1' face='Verdana, Tahoma, Arial'>E-mail enviado em <strong>$data_envio</strong> às <strong>$hora_envio</strong></font></td>
  </tr>
</table>
</html>
";

// emails para quem será enviado o formulário (se for mais de um separar com virgula)
$destino = "$emailpara";
$assunto = "Indicação de Um Amigo Seu!";

// É necessário indicar que o formato do e-mail é html
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome <$email>\r\n";

$email = mail($destino, $assunto, $arquivo, $headers);
if($email){
?>
<BR>
<BR>
<br>
<br>
<br>
<br>

<meta http-equiv="refresh" content="2;URL=javascript:self.close()">
<table align="center" width="200" cellpadding="0" cellspacing="0">
<tr>
    <TD align="center" class="branco"><strong>E-MAIL 
      ENVIADO COM SUCESSO!<br>
      <br>
      <a href="javascript:close()"><font color="#FFFFFF">Fechar</font></a></strong></td>
  </tr>
</table>
<BR>
<? } else { ?>
<BR>
<BR>
<br>
<br>
<br>
<br>


<meta http-equiv="refresh" content="2;URL=javascript:history.go(-1)">
<table align="center" width="200" cellpadding="0" cellspacing="0">
<tr>
    <TD align="center" class="branco"><strong>ERRO 
      AO ENVIAR E-MAIL!<br>
      <br>
      <a href="javascript:history.go(-1)"><font color="#FFFFFF">Voltar</font></a></strong></td>
  </tr>
</table>
<?
// fecha tag else
}
?>
