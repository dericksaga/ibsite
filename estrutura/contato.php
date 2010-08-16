	<script type="text/javascript" src="js/usableforms.js"></script>
    <script src="js/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="js/SpryValidationCheckbox.js" type="text/javascript"></script>
    <link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="css/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">

<div align="center" style="width:526px; ">
	<img src="images/tit-contato.png"><br />
<? if ($_GET[acao] == ""){ ?>
</div>
<div align="center" style="width:526px;  background:url(images/fundoconteudo.png) repeat-y;" class="textos"><br />
  <br />
  <br />
<br />
        Quer falar conosco?<br />
        Preencha o formul&aacute;rio abaixo e clique que teremos o maior <br />
  prazer em receber sua mensagem! <br />
  <br />
  <br />
<br /><br />

  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top" align="center" >
	      <table border="0" align="center" cellpadding="0" cellspacing="0">
		      <tr>
		          <td>
			          <form name="form1" method="post" action="index.php?pg=contato&acao=envia" style="margin:0px;">
			            <table width="370" border="0" cellspacing="0" cellpadding="0">
			              <tr> 
			                <td width="61" align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    Nome:&nbsp;                                      </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                  <span id="nomefield">
                                      <input name="nome" type="text" id="nome" size="50" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:309px; margin-bottom:1px;" >
                                          <span class="textfieldRequiredMsg">
                                                <br>
                                              Preencha o campo Nome.                                        </span> </span> </font> </div></td>
                          </tr>
			              <tr>
			                <td style="height:5px;"></td>
                          </tr>
			              <tr> 
			                <td align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    Cidade:&nbsp;                                        </font>                                    </td>
                              <td width="210">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                                  <span id="cidfield"> 
                                      <input name="cidade" type="text" id="nome5" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:200px; margin-bottom:1px;" size="35">
                                          <span class="textfieldRequiredMsg">
                                                <br>
                                              Preencha o campo "Cidade". </span> </span> </font> </div></td>
                              <td width="44">
                                  <div align="right">
                                      <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                          Estado:&nbsp;                                            </font>                                        </div>                                    </td>
                              <td width="55">
                                  <div align="right">
                                      <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                          <select name="estado" id="estado" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:50px; margin-bottom:1px;">
                                              <option value="AC">AC</option>
                                              <option value="AL">AL</option>
                                              <option value="AP">AP</option>
                                              <option value="AM">AM</option>
                                              <option value="BA">BA</option>
                                              <option value="CE">CE</option>
                                              <option value="DF">DF</option>
                                              <option value="ES">ES</option>
                                              <option value="GO">GO</option>
                                              <option value="MA">MA</option>
                                              <option value="MT">MT</option>
                                              <option value="MS">MS</option>
                                              <option value="MG" selected>MG</option>
                                              <option value="PA">PA</option>
                                              <option value="PB">PB</option>
                                              <option value="PR">PR</option>
                                              <option value="PE">PE</option>
                                              <option value="PI">PI</option>
                                              <option value="RJ">RJ</option>
                                              <option value="RN">RN</option>
                                              <option value="RS">RS</option>
                                              <option value="RO">RO</option>
                                              <option value="RR">RR</option>
                                              <option value="SC">SC</option>
                                              <option value="SP">SP</option>
                                              <option value="SE">SE</option>
                                              <option value="TO">TO</option>
                                          </select>
                                      </font>                                        </div>                                    </td>
                          </tr>
			              <tr>
			                <td style="height:5px;">                                    </td>
                          </tr>
			              <tr> 
			                <td align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    Telefone:&nbsp;                                        </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                                  <span id="tfccfield"> 
                                      <input name="telefone" type="text" id="telefone" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:200px; margin-bottom:1px;" size="25">
                                          <span class="textfieldRequiredMsg">
                                                <br>
                                              Preencha o campo "Telefone". </span> </span> </font> </div></td>
                          </tr>
			              <tr>
			                <td style="height:5px;">                                    </td>
                          </tr>
			              <tr> 
			                <td align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    E-mail:&nbsp;                                        </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                                  <span id="emailfield"> 
                                      <input name="email" type="text" id="email" size="35" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:200px; margin-bottom:1px;">
                                          <span class="textfieldRequiredMsg">
                                                <br>
                                                Preencha o campo "Email". </span>
                                          <span class="textfieldInvalidFormatMsg">
                                                <br>
                                              Formato Inv&aacute;lido. </span> </span> </font> </div></td>
                            </tr>
			              <tr>
			                <td style="height:5px;">                                    </td>
                            </tr>
			              <tr>
			                <td align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    Assunto:&nbsp;                                        </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                    <input name="assunto" type="text" id="assunto" size="35" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:200px; margin-bottom:1px;">
                                  </font> </div></td>
                            </tr>
			              <tr>
			                <td style="height:5px;">                                    </td>
                            </tr>
			              <tr>
			                <td align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                    Mensagem:&nbsp;                                        </font>                                    </td>
                              <td colspan="3">
                                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                      <textarea name="message" id="textarea" style="border:1px solid gray; background-color: whitesmoke; width:309px; "></textarea>
                                  </font>                                    </td>
                            </tr>
			              <tr> 
			                <td colspan="4" valign="middle">
			                  <div align="center"> 
			                    <p align="right" >
			                      <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
			                        Favor conferir os campos de e-mail e telefone, para que <br />
			                        possamos entrar em contato o mais breve poss&iacute;vel.<br />
			                        <br />
		                          </font>                                            </p>
                                  <p>
                                      <input type="reset" name="Submit2" value="Limpar" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; ">
                                      &nbsp;&nbsp;&nbsp; 
                                      <input type="submit" name="Submit" value="Enviar" style="border:1px solid gray; font-size:12px; background-color: whitesmoke ; ">
                                      <br /><br />
                                  </p>
                                </div>                                    </td>
                            </tr>
			              </table>
                      </form>                    </td>
              </tr>
          </table>        </td>
    </tr>
  </table>
  <br />
  <script type="text/javascript">
	<!--
	var sprytextfield1 = new Spry.Widget.ValidationTextField("nomefield", "none", {validateOn:["change"]});
	var sprytextfield10 = new Spry.Widget.ValidationTextField("cidfield", "none", {validateOn:["change"]});
	var sprytextfield5 = new Spry.Widget.ValidationTextField("tfccfield", "none", {validateOn:["change"]});
	var sprytextfield17 = new Spry.Widget.ValidationTextField("emailfield", "email");
	//-->
</script>
  
  
  <? } else { if ($_GET[acao] == "envia"){  ?>
  <div class="textos" style="background:url(images/fundoconteudo.png) repeat-y;">
  <?
 	echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">";
	$nome = $_POST["nome"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$assunto = $_POST["assunto"];
	$message = $_POST["message"];

	$site = "ibrasiltv.com.br";


	$m = "Mensagem enviada atraves do site www.$site: <br><br>";
	$m .= "Nome: $nome<br>";
	$m .= "Cidade: $cidade - $estado<br>";
	$m .= "E-mail: $email<br>";
	$m .= "Telefone: $telefone<br><br>";
	$m .= "Assunto: $assunto<br><br>";
	$m .= "Mensagem: <br>$message<br>";

$cabecalho = "From: <administrador@$site> \r\n";
$cabecalho .= "Reply-to: <$email> \r\n";

$ass = "Preenchimento do formulario 'contato' no site www.$site - ";
$ass .= time();

	$destino1 = "saintaggelos@gmail.com";
	$destino2 = "ibrasiltv@gmail.com";
	$nomedestino2 = "Cliente";
	$destino3 = "";
	$nomedestino3 = "";

error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('classes/class.phpmailer.php');
$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "localhost"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mailer@atelieronline.com.br";  // GMAIL username
$mail->Password   = "mt670po";            // GMAIL password
$mail->SetFrom("$email", "$nome");
$mail->Subject    = "$ass";
$mail->MsgHTML($m);
$mail->AddAddress($destino1, "Webmaster");
if($destino2 <> ""){ $mail->AddAddress($destino2,$nomedestino2); }
if($destino3 <> ""){ $mail->AddAddress($destino3,$nomedestino3); }
$mail->Send();

	$data = date("Y-m-d");

	$sql = "INSERT INTO mala 
			VALUES (
			NULL , '$nome', '$cidade', '$telefone', '$email', '$estado', '$assunto', '$data', '$promocao');";
	$result = mysql_query($sql);

?>
  <br />
<br />
<br />
<br />
<br />

  <p style="text-align:center" >--------------------------------------</p>
  <p style="text-align:center" >J&aacute; recebemos sua mensagem!</p>
  <p style="text-align:center" >Em breve entraremos em contato.</p>
  <p style="text-align:center" >--------------------------------------</p>
  <p style="text-align:center"><img src="images/logo.png" /></p>
  <br />
</div>
  <? }} ?>
</div>
<img src="images/rodapeconteudo.png"><br />

<? $altura = 335; include "estrutura/videos-direita.php"; ?>