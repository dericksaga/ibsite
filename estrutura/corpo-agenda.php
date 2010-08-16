<BR>

<?
	$dt = date("Y-m-d");
	$sql3 = mysql_query("SELECT * FROM agenda where data>='$dt' order by data");
	$tr = mysql_num_rows($sql3);
	if($tr == 0){echo "<p align='center'><br>Desculpe, no momento não há nenhum <br>evento cadastrado no nosso banco de dados.</p>";}
	$i = 1;
	while ($dados3=mysql_fetch_array($sql3)){
		$data=explode("-",$dados3[data]);
		$hora=explode(":",$dados3[hora]); ?>
        <table width="470" align="center" style="border:1px solid gray; border-top:none; <? if($i == 1){echo "border-top:1px solid gray;";} ?> border-bottom:3px double gray;">
   	  <tr>
                <td width="55" align="center" valign="top" style="background:url(images/dia.jpg) center top no-repeat; padding-top:8px;">
                	<span style="color:white; font-size:16px; font-weight:bold;"><?=$data[2]?></span><br />
                    <span style="color:white; font-size:14px; font-weight:bold;">
			  <? 
						switch ($data[1]) {
							case "1": echo "JAN"; break;  
							case "2": echo "FEV"; break;  
							case "3": echo "MAR"; break;  
							case "4": echo "ABR"; break;  
							case "5": echo "MAI"; break;  
							case "6": echo "JUN"; break;  
							case "7": echo "JUL"; break;  
							case "8": echo "AGO"; break;  
							case "9": echo "SET"; break;  
							case "10": echo "OUT"; break;  
							case "11": echo "NOV"; break;  
							case "12": echo "DEZ"; break;  
						}
					?></span>
                    <p style="font-size:10px;">&agrave;s<br><?=$hora[0]?>:<?=$hora[1]?>h</p>
                    </td>
                <td valign="top" style="PADDING-top:3PX;">
                <span style="font-size:14px"><B><?=$dados3[titulo]?></B><br /></span>
                <p style="margin:0px; padding-left:15px; padding-bottom:10px; padding-top:5px;">
					<b><?=$dados3[local]?><br></b>
					<i><?=$dados3[endereco]?></i>
                </p>
                  
                </td>
        	</tr>
			<? if($dados3[outras] <> ""){ ?>
        	<tr><td colspan="2" style="padding:2px;" align="center" bgcolor="white"><i><?=$dados3[outras]?></i></td></tr>
			<? } ?>
        </table>
<? } ?>
<br />
<br />