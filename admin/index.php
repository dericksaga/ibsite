<? session_start(); ?><?
$requiredUserLevel = array(1,2);
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

setcookie("login", $_POST[entered_login]);
setcookie("pass", $_POST[entered_password]);

//include("path.php");
include("config.php");

$cidade = 1;
$qts_ultimos = 20;

$fonte = "Verdana, Arial, Helvetica, sans-serif"; 				// fonte do site
$tfonte = 10; 			    // tamanho da fonte usada
$ttitulo = 12;			    // tamanho dos titulos do site 
$coronmouse = "red";		// cor quando passar o mouse em cima dos links #999999
$cortexto = "black"; 		    // cor do texto

?> 
<html>
<head>
<title>Área Administrativa - Atelier Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(<?=$usite?>images/bg_body.gif);
	background-color: <?=$corfundosite?>;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: <?=$fonte?>;
	font-size: <?=$tfonte?>;
	color: <?=$cortexto?>;
}

body,td,th {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: <?=$fonte?>;
	font-size: <?=$tfonte?>;
	color: <?=$cortexto?>;
}

.branco {color: #FFFFFF}

.pequeno {
	font-size: 8px;
	color: #999999;
}

.titulos {
	font-size: <?=$tfonte?>;
	color:  <?=$coronmouse?>;
}

a:link, a:active, a:visited {
color: <?=$cortexto?>;
text-decoration: none;
}

a:hover {
color:  <?=$coronmouse?>;
text-decoration: underline;
}

.input {
	border: 1px solid #333333;
	font-family: <?=$fonte?>;
	font-size: <?=$tfonte?>;
	color: <?=$cortexto?>;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
  <table width="955" border="0" cellpadding="0" cellspacing="0" class="linkizinho">
    <tr> 
      <td width="776" height="92"><table width="955" height="145" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="171"><div align="center"><a href="../"><img src="../images/logomedia.jpg" border="0" /></a></div></td>
            <td width="605" valign="middle"> <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&Aacute;rea 
              administrativa do site</strong></font><font size="3"><font size="2"> 
              <p><font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></font><font color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif"><strong>Muito 
                cuidado</strong> ao excluir ou alterar os dados aqui <br />
              </font><font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></font><font color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif">                contidos,
                pois n&atilde;o h&aacute; como desfazer nenhuma das <br />
              </font><font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></font><font color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif"> modifica&ccedil;&otilde;es 
                efetuadas, nem recuperar dados deletados.</font><br>
                <br>
              </p>
            </font></font></td>
          </tr>
      </table> </td>
    </tr>
  </table>
</div>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr>
    <td height="16"><font color="#FFFFFF">&nbsp;
          <? $sql = mysql_query("SELECT * FROM phpsp_users where user='$login'");
$dados = mysql_fetch_array($sql);
$usernivel = "$dados[userlevel]";
$idfranquia = "$dados[id_franquia]";
$materia=$idfranquia;
$professor=$dados[primary_key];

//echo $idfranquia;
?>
      Olá <b><? echo $dados[nome];?></b>
      <!--(<?
$sql2=mysql_query("SELECT * FROM franquias WHERE id='$dados[id_franquia]'");
$dados2=mysql_fetch_array($sql2);
echo $dados2[cidade];
?>)-->
      , seja bem vindo! </font></td>
    <td align="right"><a href="logout.php"><font color="#FFFFFF">Sair</font>&nbsp;</a> </td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="147" align="right" valign="top" background="../images/bg_men4.gif" bgcolor="#FFFFFF"><? include("menu.php");?></td>
    <td width="1" background="../images/layout/barrinha_divisao_vertical.gif" bgcolor="#CCCCCC"></td>
    <td height="300" align="center" valign="top" bgcolor="#FFFFFF">
	<br><font face="Geneva, Arial, Helvetica, sans-serif">
	<? include("query_string.php");?></td>
  </tr>
</table>


  </body></html>