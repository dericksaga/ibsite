<?PHP

//  ------ create table variable ------
// variables for Netscape Navigator 3 & 4 are +4 for compensation of render errors
$Browser_Type  =  strtok($HTTP_ENV_VARS['HTTP_USER_AGENT'],  "/");
if ( ereg( "MSIE", $HTTP_ENV_VARS['HTTP_USER_AGENT']) || ereg( "Mozilla/5.0", $HTTP_ENV_VARS['HTTP_USER_AGENT']) || ereg ("Opera/5.11", $HTTP_ENV_VARS['HTTP_USER_AGENT']) ) {
	$theTable = 'WIDTH="400" HEIGHT="245"';
} else {
	$theTable = 'WIDTH="400" HEIGHT="245"';
}

//echo $HTTP_ENV_VARS["QUERY_STRING"];

// ------ create document-location variable ------
if ( ereg("php\.exe", $HTTP_SERVER_VARS['PHP_SELF']) || ereg("php3\.cgi", $HTTP_SERVER_VARS['PHP_SELF']) || ereg("phpts\.exe", $HTTP_SERVER_VARS['PHP_SELF']) ) {
	$documentLocation = $HTTP_ENV_VARS['PATH_INFO'];
} else {
	$documentLocation = $HTTP_SERVER_VARS['PHP_SELF'];
}
if ( $HTTP_ENV_VARS['QUERY_STRING'] ) {
	$documentLocation .= "?" . $HTTP_ENV_VARS['QUERY_STRING'];
}
include("../config.php");

?>
	
<SCRIPT LANGUAGE="JavaScript">
<!--
//  ------ check form ------
function checkData() {
	var f1 = document.forms[0];
	var wm = "<?PHP echo $strJSHello; ?>\n\r\n";
	var noerror = 1;

	// --- entered_login ---
	var t1 = f1.entered_login;
	if (t1.value == "" || t1.value == " ") {
		wm += "<?PHP echo $strLogin; ?>\r\n";
		noerror = 0;
	}

	// --- entered_password ---
	var t1 = f1.entered_password;
	if (t1.value == "" || t1.value == " ") {
		wm += "<?PHP echo $strPassword; ?>\r\n";
		noerror = 0;
	}

	// --- check if errors occurred ---
	if (noerror == 0) {
		alert(wm);
		return false;
	}
	else return true;
}
//-->
</SCRIPT>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="2"><div align="right">
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">            <table width="300" height="100%"  border="0" cellpadding="0" cellspacing="0">
            <tr>
                  <td width="63%" height="35%" align="center" valign="bottom"><a href="../"><img src="../images/logomedia.jpg" border="0" /></a><br>
                  &nbsp; </td>
            </tr>
            <tr>
              <td align="center" valign="top">
			  <form action='<?PHP echo $documentLocation; ?>' METHOD="post" onSubmit="return checkData()">
&nbsp; Login:
        <TABLE border="0" CELLPADDING="0" CELLSPACING="0">
          <TR>
            <TD ALIGN="left" VALIGN="middle">
              <table border="0" cellpadding="0" cellspacing="3">
                <tr>
                  <td colspan="2"><input class="input" name="entered_login" type="text" size="25"></td>
                </tr>
                <tr>
                  <td><input class="input" name="entered_password" type="password" size="15"></td>
                  <td><input class="input" name="logar" type="submit" value="Entrar"></td>
                </tr>
            </table></TD>
          </TR>
        </TABLE>
        <font color="#FF0000">
        <?PHP
			// check for error messages
			if ($message) {
				echo $message;
			} ?>
        </font>
                    </form></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>


