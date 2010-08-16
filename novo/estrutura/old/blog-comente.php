<DIV style="width:450PX; ">
<? if ($_GET[acao] == "enviar"){
	if ($_GET[validacao] == "3"){ 
		$data=date("Y-m-d");
		$sql = "INSERT INTO noticias_comentarios VALUES ('', '$_GET[id]', '$_GET[nome]', '$_GET[email]', '$_GET[message]', '$data', '0','".md5($_GET[email])."')";
		$sql = mysql_query($sql);
		$id_recuperado = mysql_insert_id();

		$site = "josyarcanjo.com.br";
		
		$destino1 = "saintaggelos@gmail.com";
		$destino2 = "contato@josyarcanjo.com.br";
		$nomedestino2 = "Josy";
		$destino3 = "tiago@cinetj.com.br";
		$nomedestino3 = "Tiago";

		$sql = mysql_query("select * from noticias_dados where id='$_GET[noticia]'");
		$dados=mysql_fetch_array($sql);

		$m = "Foi comentado no blog do site www.$site, na postagem de t&iacute;tulo: <br>";
		$m .= "<b>$dados[titulo]</b><br>";
		$m .= "---------------------------------------<br>";
		$m .= "Nome: $_GET[nome]<br>";
		$m .= "E-mail: $_GET[email]<br><br>";
		$m .= "Mensagem: <br>$message<br><br>";
		$m .= "Para liberar esta mensagem &eacute; necess&aacute;rio que voc&ecirc; acesse o sistema e autorize no menu espec&iacute;fico ou simplesmente clique neste link:<br>";

		$sql = mysql_query("select * from noticias_comentarios where id_noticia='$_GET[noticia]'");
		$dados=mysql_fetch_array($sql);

		$m .= "<a href='http://www.josyarcanjo.com.br/index2.php?pg=libera&acao=vai&cod=".md5($_GET[email])."&iiiiid=$id_recuperado'>http://www.josyarcanjo.com.br/index2.php?pg=libera&acao=vai&cod=".md5($_GET[email])."&iiiiid=$id_recuperado</a>";
		
		$cabecalho = "From: <administrador@$site> \r<br>";
		$cabecalho .= "Reply-to: <$email> \r<br>";
		
		$email = $_GET[email];
		$nome = $_GET[nome];
		
		$ass = "Comentario no blog do site www.$site - ";
		$ass .= time();
		
error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('classes/class.phpmailer.php');
$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "localhost"; // SMTP server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mailer@atelieronline.com.br";  // GMAIL username
$mail->Password   = "mt670po";            // GMAIL password
$mail->SetFrom("$email", "$nome");
$mail->Subject    = "$ass";
$mail->MsgHTML($m);
$mail->AddAddress($destino1, "Webmaster");
if($destino2 <> ""){ $mail->AddAddress($destino2,$nomedestino2); }
if($destino3 <> ""){ $mail->AddAddress($destino3,$nomedestino3); }
$mail->Send();
	?>
		<div class="citacao" style="color: #333; padding:5px; margin:30px; border:3px double gray; color: #C3F;">
        	<b>
            	Seu coment&aacute;rio foi enviado e ser&aacute; publicado em breve.
			</b>
		</div>
<?		$_GET[nome] = "";
		$_GET[email] = "";
		$_GET[validacao] = "";
		$_GET[message] = "";
	} else {  ?>
		<div class="citacao" style="color: #333; padding:5px; margin:30px; border:3px double gray; color: #C3F;">
        	<b>
            	Desculpe, mas a resposta da pergunta de validação não foi respondida corretamente. Favor verificar os campos e enviar novamente.
			</b>
		</div>
<?	}
} ?>

<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/thickbox.js"></script>

<script type="text/javascript" src="js/usableforms.js"></script>
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="js/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="css/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">

<?
$pg=$_GET[pg];
$page=$_GET[page];

$busca = "SELECT * FROM noticias_comentarios where id_noticia=$_GET[noticia] and autorizacao = 1 order by id desc";

$total_reg = 9999;

if(!$page){
$page = "1";
}

$inicio = $page-1;
$inicio = $inicio*$total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos);
$tp = ceil($tr / $total_reg); ?>

<? if($tr <> 0){ ?>
<? if($tr == 1){ $palavra = $tr." Coment&aacute;rio";} else {$palavra = $tr." Coment&aacute;rios";} ?>
<div class="citacao" style="color: #333; border-bottom:3px double gray;"><b><?=$palavra?>!!!</b></div><br />
<? } ?>

<? while ($dados=mysql_fetch_array($limite)){ ?>

<? if($tr <> 0){ ?>
	<div class="titulocoment"><?=$dados[nome]?> disse:</div>
    <div style="float:left; padding-left:30px; font-size:10px; padding-top:68px;" class="titulocoment"><? $data = explode("-", $dados[data]); $data = "$data[2]/$data[1]/$data[0]"; echo $data; ?></div>
	<div class="textopreto" style="padding-left:115px; padding-top:13px; padding-right:50px; background:url(images/balao.jpg) 20px -3px no-repeat; "><?=$dados[comentario]?></div>
<? }} ?>

<div class="citacao" style="color: #333; border-bottom:3px double gray;"><b>Deixe seu coment&aacute;rio:</b></div><br />
	<table width="370" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td>
	      <form action="?pg=<?=$pg?>&acao=envia&id=<?=$_GET[id]?>" method="get" name="form1" id="form1">
	        <table width="370" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="61" align="right" valign="top"><font class="textopreto">Nome:&nbsp;</font></td>
	            <td width="309"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> <span id="nomefield">
	              <input name="nome" type="text" id="nome" style="border:1px solid #435077; font-size:12px; background-color: white; width:309px; margin-bottom:1px;" value="<?=$_GET[nome]?>" size="50" />
                <span class="textfieldRequiredMsg"><br />
	                Preencha o campo Nome.</span></span> </font></td>
  </tr>
	          <tr>
	            <td style="height:5px;"></td>
              </tr>
	          <tr>
	            <td align="right" valign="top"><font class="textopreto">E-mail:&nbsp;</font></td>
	            <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> <span id="emailfield">
	              <input name="email" type="text" id="email" style="border:1px solid #435077; font-size:12px; background-color: white; width:200px; margin-bottom:1px;" value="<?=$_GET[email]?>" size="35" />
                <span class="textfieldRequiredMsg"><br />
	                Preencha o campo &quot;Email&quot;.</span><span class="textfieldInvalidFormatMsg"><br />
	                  Formato Inv&aacute;lido.</span></span> </font></td>
  </tr>
	          <tr>
	            <td style="height:5px;"></td>
              </tr>
	          <tr>
	            <td align="right" valign="top">&nbsp;</td>
	            <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Responda &agrave; pergunta: <strong>1 + 2 = </strong><span id="sprytextfield2">
	              <input name="validacao" type="text" id="validacao" style="border:1px solid #435077; font-size:12px; background-color: white; width:24px; margin-bottom:1px;" value="<?=$_GET[validacao]?>" size="1" />
                <br />
                <span class="textfieldRequiredMsg">Digite a resposta desta pergunta.</span></span></td>
  </tr>
	          <tr>
	          <tr>
	            <td style="height:5px;"></td>
              </tr>
	          <tr>
	            <td align="right" valign="top"><font class="textopreto">Mensagem:&nbsp;</font></td>
	            <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
	              <textarea name="message" id="textarea" style="border:1px solid #435077; background-color: white; width:309px; height:150px; "><?=$_GET[message]?></textarea>
	              </font></td>
              </tr>
	          <tr>
	            <td colspan="2"><div align="center">
	              <p align="center" class="textopreto" style=" text-align:center;">
	                <input type="reset" name="Submit2" value="Limpar" style="border:1px solid #435077; font-size:12px; background-color: white; " />
	                &nbsp;&nbsp;&nbsp;
	                <input type="submit" name="Submit" value="Enviar" style="border:1px solid #435077; font-size:12px; background-color: white; " />
	                <input type="hidden" name="pg" value="noticia"/>
	                <input type="hidden" name="acao" value="enviar"/>
	                <input type="hidden" name="noticia" value="<?=$_GET[noticia]?>"/>
                  </p>
	              </div></td>
              </tr>
            </table>
</form></td>
</tr>
    </table>
	<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("nomefield", "none", {validateOn:["change"]});
var sprytextfield17 = new Spry.Widget.ValidationTextField("emailfield", "email");
//-->
    </script>
<br />
<br />
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
//-->
</script>
</DIV>