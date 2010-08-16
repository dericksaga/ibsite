<? $requiredUserLevel = array(1);
$cfgProgDir = '../admin/phpSecurePages/';
include($cfgProgDir . "secure.php");
?>
<?
include("path2.php");
$sql = mysql_query("SELECT * FROM noticias ORDER BY id DESC");
?>
<script language="JavaScript">
<!--
//Check If Actually You want to delete
function checkdeletetion(){
   if (!confirm("Você realmente deseja deletar este registro.") == false )
       document.forms.MultiDeletetion.submit();
}


function CheckAll() {
   for (var i=0;i<document.MultiDeletetion.elements.length;i++){
       var e = document.MultiDeletetion.elements[i];
       if ((e.name != 'allbox') && (e.type=='checkbox'))
       e.checked = document.MultiDeletetion.allbox.checked;
   }
}

function CheckCheckAll() {
   var TotalBoxes = 0;
   var TotalOn = 0;

   for (var i=0;i<document.MultiDeletetion.elements.length;i++){
       var e = document.MultiDeletetion.elements[i];
       if ((e.name != 'allbox') && (e.type=='checkbox')) {
           TotalBoxes++;
               if (e.checked){
                   TotalOn++;
               }

       }
   }

       if (TotalBoxes==TotalOn) {
           document.MultiDeletetion.allbox.checked=true;
       } else {
           document.MultiDeletetion.allbox.checked=false;
       }
}

//-->
</script>
<div align="center">
  <center>
<FORM METHOD="post" NAME="MultiDeletetion" ACTION="excluir_db.php?id=<? echo $dados[id]?>">
    <table width="440" border="0" cellspacing="0" cellpadding="5" style="border-left: 1 solid #cccccc; border-right: 1 solid #cccccc">
      <tr> 
        <td colspan="4" bgcolor="#CCCCCC">
<div align="center"><font size="4" face="tahoma"><b>Sistema de Excluir Notícias</b></font></div>
			</td>
      </tr>
      <tr bgcolor="#E1E1E1"> 
        <td width="45" align="center" style="border-right: 1 solid #FFFFFF"> 
          <div align="center"><font face="Tahoma" size="2"><b>ID</b></font></div></td>
        <td width="350" bgcolor="#E1E1E1" style="border-right: 1 solid #FFFFFF"> 
          <div align="center"><font face="Tahoma" size="2"><b>T&iacute;tulo da 
            Not&iacute;cia</b></font></div></td>
        <td width="50"> 
          <div align="center"><font face="Tahoma" size="2"><b>Excluir</b></font></div></td>
  </tr>
<? while ($dados=mysql_fetch_array($sql)) { ?>
  <TR bgcolor="#FFFFFF"> 
    <TD height="10" colspan="4"></TD>
  </TR>
      <tr bgcolor="#E1E1E1"> 
        <td style="border-right: 1 solid #FFFFFF"><font size="1" face="verdana,tahoma,arial" color="#281870">
          <input onclick="CheckCheckAll();" Type="checkbox" Value='<? echo $dados[id]?>' Name="Delete">
          </font> <font face="Tahoma" size="2"> <? echo $dados[id]?></font></td>
        <td style="border-right: 1 solid #FFFFFF"> 
          <div align="left"><font face="Tahoma" size="2"><? echo $dados[titulo]?></font></div></td>
        <td> 
          <div align="center"><font face="Tahoma" size="2"><a href='excluir_db.php?id=<? echo $dados[id]?>'>Excluir</a></font></div></td>
  </tr>
<? } ?>
</table>

<table border="0" width="440" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td width="19"><font face="Tahoma" size="1" color="#FFFFFF">
                          <input name="allbox" type="checkbox" value="Check All" onClick="CheckAll();">
                          </font></td>
                        
          <td><font face="Tahoma" size="1">Selecionar todas as Not&iacute;cias</font></td>
                        <td width="164"> <p><font face="Tahoma" size="1" color="#FFFFFF">
                            <INPUT TYPE="button" onClick="checkdeletetion();" VALUE="Excluir Notícias Selecionados" style="height: 24; width: 195">
                            </font></td>
                      </tr>
                    </table>
</form>
  </center>
</div>