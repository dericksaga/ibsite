<? include("../../config.php");
$local = $_GET[local];
$data = $_GET[data];
$evento = $_GET[evento];
?>

<table  border="0" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
  <tr>
    <td align="center" valign="top" bgcolor="#F6B402">      <input type="hidden" value="<? echo $evento?>" name="teste">      
    <table border="0" align="center" cellpadding="1" cellspacing="0">
        <tr> 
          <td align="right" colspan="2">
		  </td>
        </tr>
        <tr>
          <td width="226" rowspan="2" align="right" valign="top"> 
          <iframe allowtransparency="true" width='224' height='394' frameborder="0" marginheight="0" marginwidth="0" name="fotos" scrolling="no" src="fotos1.php?dir=<? echo $dir?>"></iframe></td>
          <td width="482" height="74" align="center" valign="middle"><table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="468" height="60" align="center" valign="middle" bgcolor="#CCCCCC" style="border:1px solid #000000;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="468" height="60">
                  <param name="movie" value="../images/banners/host137-468x60.swf">
                  <param name="quality" value="high">
                  <embed src="../images/banners/host137-468x60.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="468" height="60"></embed>
                </object></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="left" valign="top">
		  <table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="344" height="322" align="right" valign="top">
         <iframe allowtransparency="true" width="338" height="320" frameborder="0" marginheight="0" marginwidth="0" name="exibe_foto" scrolling="no" src="zoom1.php?dir=<? echo $dir?>&foto=<? echo $foto?>&evento=<? echo "$evento";?>&data=<? echo $data?>&local=<? echo $local?>"></iframe>		 </td>
    <td width="125" valign="top"><font color="#000000" size="4"><strong>    </strong></font>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><font color="#000000" size="4"><strong><img src="../images/layout/img_pagina_zoom_icone.png" width="135" height="149"></strong></font></td>
        </tr>
        <tr>
          <td background="../images/layout/img_pagina_zoom_infos_fundo.png"><table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="10">&nbsp;</td>
              <td width="105"><strong><? echo "$evento";?></strong><br>
			  Local: <strong><? echo "$local";?></strong><br>
              Data: <strong><? echo "$data";?></strong></td>
            </tr>
          </table>            </td>
        </tr>
        <tr>
          <td><img src="../images/layout/img_pagina_zoom_infos_fim.png" width="135" height="11"></td>
        </tr>
        <tr>
          <td align="center">            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="113" height="85">
            <param name="movie" value="../images/layout/anim.swf">
            <param name="quality" value="high">
            <embed src="../images/layout/anim.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="113" height="85"></embed>
          </object></td>
        </tr>
      </table>      </td>
  </tr>
</table>
        </tr>
    </table>    </td>
  </tr>
</table>

