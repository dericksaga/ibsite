<?
#########################################################
#Copyright ฉ RevendAuto. Todos os direitos reservados.  #
#########################################################
#                                                       #
#  Programa        : Script PHP RevendAuto v 1.0        #
#  Autor/Tradutor  : Mois้s Bach B.                     #
#  E-mail          : moisbach@gmail.com                 #
#  Versใo          : 1.0                                #
#  Modificado em   : 01/08/2005                         #
#  Copyright ฉ     : RevendAuto                         #
#                 WWW.ANIMABUSCA.COM                    #
#########################################################
#ESTE SCRIPT NรO PODE SER COPIADO SEM AUTORIZAวรO PRษVIA#
#########################################################

/*------------------------------------------------------------------------------------------------------
Name: checkgd
Created: 06.21.2004
Format: checkgd();
Returns: true or false
Description: checks to see what version if any of the GD Graphics Library is installed on the server
------------------------------------------------------------------------------------------------------*/
// check if the revendauto server is running GD version 2 or higher
function checkgd() {
	ob_start(); // turn on output buffering
	phpinfo(8); // display loaded modules and their settings
	$phpinfo = ob_get_contents(); // get contents of output buffer
	ob_end_clean(); // erase contents of output buffer and turn buffering off
	
	$phpinfo = strip_tags($phpinfo); // strip html and php tags
	$phpinfo = stristr($phpinfo, "gd version"); // return everything after...
	$phpinfo = stristr($phpinfo, "version"); // return everything after...
	
	$tmp = explode("\n", $phpinfo);
	$phpinfo = $tmp[0];
	
	preg_match('/\d/', $phpinfo, $version); // grab 1st single digit character
	if($version[0] >= '2') { return true; }
	else { return false; }
}

/*------------------------------------------------------------------------------------------------------
Name: resize
Created: 02.07.2004
Format: resize(source name, thumbnail width, thumbnail height, resized image name);
Returns: 0 or 1 depending on success of function
Description: creates a resized image (JPG) from the specified source image (JPG)
------------------------------------------------------------------------------------------------------*/
function resize($original, $newx, $newy, $resized) {

	$backup = $resized.'_BAK.JPG'; // NAME OF BACKUP
	copy ($original, $backup); // COPY SOURCE TO BACKUP
	$properties = getimagesize($backup); // GET IMAGE PROPERTIES
	
	if($properties[2] != '2') { // IF THE IMAGE IS NOT A .JPG
		return(0); // RETURN ERROR
	} else {
		$source = imagecreatefromjpeg($backup); // CREATE IMAGE IDENTIFIER
		$sourcex = imagesx($source); // GET WIDTH
		$sourcey = imagesy($source); // GET HEIGHT
		
		$destination = imagecreatetruecolor($newx, $newy); // CREATE A NEW TRUE COLOR IMAGE
		unlink($backup); // DELETE BACKUP FILE
		
		if(!imagecopyresampled($destination, $source, 0, 0, 0, 0, $newx, $newy, $sourcex, $sourcey)) {
			imagedestroy($source); // FREE MEMORY FROM $source
			imagedestroy($destination); // FREE MEMORY FROM $destination
			return(0); // RETURN ERROR
		} else {
			imagedestroy($source);
			if(imagejpeg($destination, $resized)) { // CREATE RESIZED IMAGE
				imagedestroy($destination);
				return(1); // RETURN SUCCESS
			}
			imagedestroy($destination);
		}
		return(0);
	}
}

?>