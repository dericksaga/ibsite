<? 	session_start();
	$pg = $_GET[pg];
	include "config.php";
	$cidade = 1;
	if(empty($pg)) {
	$pg = "principal";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ibrasil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<!--[if lt IE 7]>
 <style type="text/css">
 div, img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->
	<!--[if IE]>
	<script defer type="text/javascript" src="pngfix.js"></script>
	<![endif]-->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background:#EBEBEB;">
<? include "query.php"; ?>
</body>
</html>