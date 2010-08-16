	<script type="text/javascript" src="js/usableforms.js"></script>
    <script src="js/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="js/SpryValidationCheckbox.js" type="text/javascript"></script>
    <link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="css/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">

<div align="center" style="width:526px; ">
	<img src="images/tit-cadastrese.png"><br />
<?
$promocao = $_GET[promocao];
if ($_GET[acao] == ""){ ?>
</div>
<div align="center" style="width:526px;  background:url(images/fundoconteudo.png) repeat-y; min-height:336px;" class="textos"><br />
  <br />
  <br />
<br />
        Cadastre-se e concorra &agrave;s promo&ccedil;&otilde;es de nosso portal, <br />
  al&eacute;m de receber nossas novidades em seu e-mail<br />
  <br />
  <br />
<br /><br />

  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top" align="center" >
	      <table border="0" align="center" cellpadding="0" cellspacing="0">
		      <tr>
		          <td>
			          <form name="form1" method="post" action="index.php?pg=cadastro&acao=envia" style="margin:0px;">
			            <table width="370" border="0" cellspacing="0" cellpadding="0">
			              <tr> 
			                <td width="61" align="right" valign="top">
			                  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
		                      Promo&ccedil;&atilde;o:&nbsp;                                      </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><span style="border-bottom:1px solid #cccccc">
                                    <select name="promocao" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:309px; margin-bottom:1px;" onchange="if(options[selectedIndex].value) window.location.href= (options[selectedIndex].value)" id="promocao">
                                    <option value="?pg=cadastro"></option>
                                     <?
$sql= mysql_query("SELECT * FROM promocoes_dados order by id");
while ($dados=mysql_fetch_array($sql)){?>
                                      <option value="?pg=cadastro&promocao=<? echo "$dados[id]";?>" <? if($promocao == $dados[id]){echo "selected";} ?>><? echo "$dados[titulo]";?></option>
                                      <? }?>
                                    </select>
                            </span></div></td>
                          </tr>
			              <tr>
			                <td style="height:5px;"></td>
                          </tr>
<? if($promocao <> ""){ ?>
			              <tr> 
			                <td colspan="4" align="center" valign="top">
								<?
                                    $sql= mysql_query("SELECT * FROM promocoes_dados where id = $promocao");
                                    while ($dados=mysql_fetch_array($sql)){
										if($dados[foto01] != "") {
											echo "<div align='center'><img src='thumbs.php?w=350&imagem=images/promocoes/$dados[id]/$dados[foto01]' style='padding-right:10px;'></div><br />";
										}
										echo "<div class='noticia'><h1>$dados[subtitulo]</h1></div>";
									}
								?>
                            <div align="right" style="font-size:10px;">Resposta: <input name="resposta" type="text" id="resposta" style="border:1px solid gray; font-size:18px; background-color: whitesmoke; width:309px; margin-bottom:1px;" /></div>
                            <input name="promocao" type="hidden" id="promocao" value="<?=$promocao?>" />
                            <?	$sql= mysql_query("SELECT * FROM promocoes_dados where id = $promocao");
								while ($dados=mysql_fetch_array($sql)){
							?>
                            <input name="nomepromocao" type="hidden" id="nomepromocao" value="<?=$dados[titulo]?>" />
							<? } ?>
                            </td>
                          </tr>
			              <tr>
			                <td style="height:5px;"></td>
                          </tr>

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
			                    Idade:&nbsp;                                        </font>                                    </td>
                              <td colspan="3">
                                  <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                    <input name="assunto" type="text" id="assunto" size="35" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; width:50px; margin-bottom:1px;">
                                  anos&nbsp; </font></div></td>
                          </tr>
			              <tr>
			                <td style="height:5px;">                                    </td>
                          </tr>
			              <tr> 
			                <td colspan="4" valign="middle">
			                  <div align="center"> 
                                  <p>
                                      <input type="reset" name="Submit2" value="Limpar" style="border:1px solid gray; font-size:12px; background-color: whitesmoke; ">
                                      &nbsp;&nbsp;&nbsp; 
                                      <input type="submit" name="Submit" value="Enviar" style="border:1px solid gray; font-size:12px; background-color: whitesmoke ; ">
                                      <br /><br />
                                  </p>
                              </div>                                    </td>
                          </tr>
<? } ?>
		                </table>
                </form>                    </td>
              </tr>
          </table>        </td>
    </tr>
  </table>
  <br />
  <script type="text/javascript">
	<!--
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
	$promocao = $_POST["promocao"];
	$nomepromocao = $_POST["nomepromocao"];
	$resposta = $_POST["resposta"];
	$data_cadastro = date("Y-m-d");

	$site = "ibrasiltv.com.br";

	$m = "Cadastro efetuado no site www.$site: <br><br>";
	$m .= "Nome: $nome<br>";
	$m .= "Cidade: $cidade - $estado<br>";
	$m .= "E-mail: $email<br>";
	$m .= "Telefone: $telefone<br><br>";
	$m .= "Idade: $assunto<br><br>";
	$m .= "Promocao: $promocao - $nomepromocao<br><br>";

$cabecalho = "From: <administrador@$site> \r\n";
$cabecalho .= "Reply-to: <$email> \r\n";

$ass = "Preenchimento do formulario 'cadastre-se' no site www.$site - ";
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

	$sql = "INSERT INTO mala 
			VALUES (
			NULL , '$nome', '$cidade', '$telefone', '$email', '$estado', '$assunto', '$data_cadastro', '$nomepromocao', '$resposta');";
	$result = mysql_query($sql);

?>
  <br />
<br />
<br />
<br />
<br />

  <p style="text-align:center" >--------------------------------------</p>
  <p style="text-align:center" >J&aacute; recebemos seu cadastro!</p>
  <p style="text-align:center" >Em breve entraremos em contato.</p>
  <p style="text-align:center" >--------------------------------------</p>
  <p style="text-align:center"><img src="images/logo.png" /></p>
  <br />
</div>
  <? }} ?>
</div>
<img src="images/rodapeconteudo.png"><br />
<? $altura = 335; include "estrutura/videos-direita.php"; ?>