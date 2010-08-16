<?
include("../../config.php");

$id = $_GET[id];
$cidade = $_GET[cidade];
$imagem = $_GET[imagem];

$sql = mysql_query("SELECT * FROM galeria where id='$id'");
$dados= mysql_fetch_array($sql);

$dir = "images/eventos/$dados[id_franquia]/$dados[pasta]/";
?>

<Script Language="JavaScript">
function validate(theForm) {
if (theForm.nome.value == "")
{
   alert("Digite seu Nome!");
   theForm.nome.focus();
   return (false);
}
if (theForm.email.value == "")
{
   alert("Digite seu E-mail!");
   theForm.email.focus();
   return (false);
}
if (theForm.nomepara.value == "")
{
   alert("Digite o nome do seu amigo!");
   theForm.nomepara.focus();
   return (false);
}
if (theForm.emailpara.value == "")
{
   alert("Digite o email do seu amigo!");
   theForm.emailpara.focus();
   return (false);
}
return (true);
}
</script>


<form action="indicacao_cod.php" method="post" onsubmit="return validate(this);">
<table border="0" align="center" cellpadding="5" cellspacing="0">
<tr align="right">
 <td colspan="2"><input name="url_foto" type="hidden" value="<? echo "$usite$dir$imagem";?>" size="80">
   <input name="link_galeria" type="hidden" value="<? echo "$usite$pasta/janela.php?id=$id&cidade=$cidade";?>" size="80">
   <input name="id" type="hidden" value="<? echo "$id";?>" size="80">
</td>
</tr>
  <tr>
    <td align="left" valign="top" style="border:1px solid #cccccc;">      <img style="border:1px solid #999999;" src="<? echo "thumbs3.php?w=260&h=195&imagem=../../$dir$imagem";?>"></td>
    <td bgcolor="#CCCCCC"><table border="0" cellspacing="2" cellpadding="0">
      <tr>
        <TD align=right>Seu Nome:<br>            <INPUT name="nome" class="input" style="BORDER:1px solid <? echo $cortexto?>; width:150" maxLength="100">
          <br></TD>
        </tr>
      <tr>
        <TD align=right>Seu E-mail:<br>            <INPUT name="email" class="input" style="BORDER:1px solid <? echo $cortexto?>; width:150" maxLength="100">
          <br></TD>
        </tr>
      <tr>
        <TD align=right>Nome do Amigo:<br>                      <INPUT name="nomepara" class="input" style="BORDER:1px solid <? echo $cortexto?>; width:150" maxLength="100">
          <br></TD>
        </tr>
      <tr>
        <TD align=right>E-mail do Amigo:<br>            <INPUT name="emailpara" class="input" style="BORDER:1px solid <? echo $cortexto?>; width:150" maxLength="100">
          </TD>
      </tr>
      <tr align="right">
        <TD height="30">
          <input name="image" type="image" src="../../images/layout/bt_en.gif">        </TD>
      </tr>
    </table></td>
  </tr>
</table>
  
</form>
