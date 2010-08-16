<?
$cfgIndexpage = 'index.php';
  // page to go to, if login is cancelled
  // Example: if your main page is http://www.mydomain.com/index.php
  // the value would be $cfgIndexpage = '/index.php'
$admEmail = 'saintaggelos@gmail.com';
  // E-mail adres of the site administrator
  // (This is being showed to the users on an error, so you can be notified by the users)
$noDetailedMessages = true;
  // Show detailed error messages (false) or give one single message for all errors (true).
  // If set to 'false', the error messages shown to the user describe what went wrong.
  // This is more user-friendly, but less secure, because it could allow someone to probe
  // the system for existing users.
$passwordEncryptedWithMD5 = true;		// Set this to true if the passwords are encrypted
                                          // with the MD5 algorithm
                                          // (not yet implanted, expect this in a next release)
$languageFile = 'brazil.php';        // Choose the language file
$bgImage = 'bg_lock.gif';                 // Choose the background image
$bgRotate = false;                         // Rotate the background image from list
                                          // (This overrides the $bgImage setting)


/****** Lists ******/
// List of backgrounds to rotate through
$backgrounds[] = 'bg_lock.gif';
$backgrounds[] = 'bg_lock2.gif';
$backgrounds[] = 'bg_gun.gif';


/****** Database ******/
$useDatabase = true;                     // choose between using a database or data as input

/* this data is necessary if a database is used */
if ($HTTP_SERVER_VARS["REMOTE_ADDR"] != "127.0.0.1"){
$cfgServerHost = 'localhost';             // MySQL hostname
$cfgServerPort = '';                      // MySQL port - leave blank for default port
$cfgServerUser = 'ibrasilt';           // MySQL user
$cfgServerPassword = 'madouienc845';          // MySQL password
$cfgDbDatabase = 'ibrasilt_bd';         // MySQL database name containing phpSecurePages table
} else {
$cfgServerHost = 'localhost';             // MySQL hostname
$cfgServerPort = '';                      // MySQL port - leave blank for default port
$cfgServerUser = 'ibrasilt';                  // MySQL user
$cfgServerPassword = 'madouienc845';                  // MySQL password
$cfgDbDatabase = 'ibrasilt_bd';      // MySQL database name containing phpSecurePages table
}

$cfgDbTableUsers = 'phpsp_users';         // MySQL table name containing phpSecurePages user fields
$cfgDbLoginfield = 'user';                // MySQL field name containing login word
$cfgDbPasswordfield = 'password';         // MySQL field name containing password
$cfgDbUserLevelfield = 'userlevel';       // MySQL field name containing user level
  // Choose a number which represents the category of this users authorization level.
  // Leave empty if authorization levels are not used.
  // See readme.txt for more info.
$cfgDbUserIDfield = 'primary_key';        // MySQL field name containing user identification
  // enter a distinct ID if you want to be able to identify the current user
  // Leave empty if no ID is necessary.
  // See readme.txt for more info.


/****** Database - PHP3 ******/
/* information below is only necessary for servers with PHP3 */
$cfgDbTableSessions = 'phpsp_sessions';
  // MySQL table name containing phpSecurePages sessions fields
$cfgDbTableSessionVars = 'phpsp_sessionvars';
  // MySQL table name containing phpSecurePages session variables fields


/****** Data ******/
$useData = false;                          // choose between using a database or data as input

/* this data is necessary if no database is used */
$cfgLogin[1] = 'root';                        // login word
$cfgPassword[1] = 'root';                     // password
$cfgUserLevel[1] = '1';                    // user level
  // Choose a number which represents the category of this users authorization level.
  // Leave empty if authorization levels are not used.
  // See readme.txt for more info.
$cfgUserID[1] = '';                       // user identification
  // enter a distinct ID if you want to be able to identify the current user
  // Leave empty if no ID is necessary.
  // See readme.txt for more info.

$cfgLogin[2] = '';
$cfgPassword[2] = '';
$cfgUserLevel[2] = '';
$cfgUserID[2] = '';

$cfgLogin[3] = '';
$cfgPassword[3] = '';
$cfgUserLevel[3] = '';
$cfgUserID[3] = '';


/**************************************************************/
/*             End of phpSecurePages Configuration            */
/**************************************************************/


// https support
if (getenv("HTTPS") == 'on') {
	$cfgUrl = 'https://';
} else {
	$cfgUrl = 'http://';
}

// getting other login variables
$cfgHtmlDir = $cfgProgDir;
if ($message) $messageOld = $message;
$message = false;

// Create a constant that can be checked inside the files to be included.
// This gives an indication if secure.php has been loaded correctly.
define("LOADED_PROPERLY", true);


// include functions and variables
function admEmail() {
	// create administrators email link
	global $admEmail;
	return("<A HREF='mailto:$admEmail'>$admEmail</A>");
}

include($cfgProgDir . "lng/" . $languageFile);
include($cfgProgDir . "session.php");


// choose between login or logout
if ($logout && !($HTTP_GET_VARS["logout"] || $HTTP_POST_VARS["logout"])) {
	// logout
	include($cfgProgDir . "logout.php");
} else {
	// loading login check
	include($cfgProgDir . "checklogin.php");
}
echo $HTTP_GET_VARS["logout"];
?>