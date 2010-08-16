<?
$id = $_GET[id];
$pag = $_GET[pag];

if($pag == "form"){
$sql = mysql_query("SELECT * FROM config where id='$id'");
while ($dados=mysql_fetch_array($sql)) {
?>
<script src="../css/janelas_popup.js" language="JavaScript"></script>
<script>this.name='pai'; </script>

<h3>Configura&ccedil;&otilde;es</h3>
<form method='POST' action='?pg=gal-configurar.php&pag=alterar&id=<? echo $id?>'>
              
  <table width="440" border='0' align="center" cellpadding='2' cellspacing='0'>
  <tr>
    <td colspan="2" align="right" style="border-bottom:1px solid #cccccc">*Nos campos de cores, clicando em &quot;Nova&quot;,<br>
      voc&ecirc; escolhe a cor, 
      e depois clica em &quot;Alterar&quot;</td>
</tr>
    <tr> 
      <td width="140" align='right' style="border-bottom:1px solid #cccccc">*Titulo 
        do site:</td>
      <td width="300" style="border-bottom:1px solid #cccccc">        <input name='tsite2' type='text' value="<? echo $dados[tsite]?>" size='32' style="width:290"></td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">*URL 
        do site:</td>
      <td style="border-bottom:1px solid #cccccc">        <input name='usite2' type='text' value="<? echo $dados[usite]?>" size='32' style="width:290">        </td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">*Fonte:</td>
      <td style="border-bottom:1px solid #cccccc">        <input name='fonte2' type='text' value="<? echo $dados[fonte]?>" size='32' style="width:290">        </td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">*Tamanho 
        Fonte:</td>
      <td style="border-bottom:1px solid #cccccc">        <input name='tfonte2' type='text' value="<? echo $dados[tfonte]?>" size='32' style="width:290">        </td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Tamanho 
        T&iacute;tulo:</td>
      <td style="border-bottom:1px solid #cccccc">        <input name='ttitulo2' type='text' value="<? echo $dados[ttitulo]?>" size='32' style="width:290">        </td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Cor 
        Texto:</td>
      <td style="border-bottom:1px solid #cccccc">	  <input type="hidden" name="cortexto_antiga" value="<? echo $dados[cortexto]?>">	  <input disabled type='text' value="<? echo $dados[cortexto]?> (Cor antiga)" size='32' maxlength="7" style="width:135">&nbsp;&nbsp;&nbsp;&nbsp;<input name='cortexto_nova' type='text' value="<? echo $_GET[novacortexto]?>" size='32' maxlength="7" style="width:70">
      <a href="javascript:cores('cores.php?id=<? echo $id?>&nivel=<? echo $nivel?>&campo=cortexto');">Nova Cor</a></td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Cor 
        OnMouseOver:</td>
      <td style="border-bottom:1px solid #cccccc">	  <input type="hidden" name="coronmouse_antiga" value="<? echo $dados[coronmouse]?>">	  <input disabled type='text' value="<? echo $dados[coronmouse]?> (Cor antiga)" size='32' maxlength="7" style="width:135">&nbsp;&nbsp;&nbsp;&nbsp;<input name='coronmouse_nova' type='text' value="<? echo $_GET[novacoronmouse]?>" size='32' maxlength="7" style="width:70">
      <a href="javascript:cores('cores.php?id=<? echo $id?>&nivel=<? echo $nivel?>&campo=coronmouse');">Nova Cor</a></td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Cor 
        do Layout 1:</td>
      <td style="border-bottom:1px solid #cccccc">	  <input type="hidden" name="corcelula1_antiga" value="<? echo $dados[corcelula1]?>">	  <input disabled type='text' value="<? echo $dados[corcelula1]?> (Cor antiga)" size='32' maxlength="7" style="width:135">&nbsp;&nbsp;&nbsp;&nbsp;<input name='corcelula1_nova' type='text' value="<? echo $_GET[novacorcelula1]?>" size='32' maxlength="7" style="width:70">
      <a href="javascript:cores('cores.php?id=<? echo $id?>&nivel=<? echo $nivel?>&campo=corcelula1');">Nova Cor</a></td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Cor 
        do Layout 2:</td>
      <td style="border-bottom:1px solid #cccccc">	  <input type="hidden" name="corcelula2_antiga" value="<? echo $dados[corcelula2]?>">	  <input disabled type='text' value="<? echo $dados[corcelula2]?> (Cor antiga)" size='32' maxlength="7" style="width:135">&nbsp;&nbsp;&nbsp;&nbsp;<input name='corcelula2_nova' type='text' value="<? echo $_GET[novacorcelula2]?>" size='32' maxlength="7" style="width:70">
      <a href="javascript:cores('cores.php?id=<? echo $id?>&nivel=<? echo $nivel?>&campo=corcelula2');">Nova Cor</a></td>
    </tr>
    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc">Cor 
        de Fundo:</td>
      <td style="border-bottom:1px solid #cccccc">	  <input type="hidden" name="corfundosite_antiga" value="<? echo $dados[corfundosite]?>">	  <input disabled type='text' value="<? echo $dados[corfundosite]?> (Cor antiga)" size='32' maxlength="7" style="width:135">&nbsp;&nbsp;&nbsp;&nbsp;<input name='corfundosite_nova' type='text' value="<? echo $_GET[novacorfundosite]?>" size='32' maxlength="7" style="width:70">
      <a href="javascript:cores('cores.php?id=<? echo $id?>&nivel=<? echo $nivel?>&campo=corfundosite');">Nova Cor</a></td>
    </tr>
	
	    <tr> 
      <td align='right' style="border-bottom:1px solid #cccccc"> Resultados por P&aacute;gina:</td>
      <td style="border-bottom:1px solid #cccccc"><input name='qts_ultimos2' type='text' value="<? echo $dados[qts_ultimos]?>" size='32' style="width:50">        </td>
    </tr>
	
  </table>
              
  <table width="400" border='0' align="center" cellpadding='0' cellspacing='0'>
    <tr> 
                  
      <td height="35" colspan='2' align="center"> 
        <center>
                      
          <input type='submit' value='Alterar'>
                      
          <input type='reset' value='Limpar'>
        </center></td>
  </tr>
  </table>
</form>
<? }

$id = $_GET[id];
$pag = $_GET[pag];
} if($pag == "alterar"){

if($_POST[cortexto_nova] != ""){$nova_cortexto = "#$_POST[cortexto_nova]";} else {$nova_cortexto = "$_POST[cortexto_antiga]";}
if($_POST[coronmouse_nova] != ""){$nova_coronmouse = "#$_POST[coronmouse_nova]";} else {$nova_coronmouse = "$_POST[coronmouse_antiga]";}
if($_POST[corcelula1_nova] != ""){$nova_corcelula1 = "#$_POST[corcelula1_nova]";} else {$nova_corcelula1 = "$_POST[corcelula1_antiga]";}
if($_POST[corcelula2_nova] != ""){$nova_corcelula2 = "#$_POST[corcelula2_nova]";} else {$nova_corcelula2 = "$_POST[corcelula2_antiga]";}
if($_POST[corfundosite_nova] != ""){$nova_corfundosite = "#$_POST[corfundosite_nova]";} else {$nova_corfundosite = "$_POST[corfundosite_antiga]";}

$sql = mysql_query("UPDATE config SET tsite='$_POST[tsite2]', usite='$_POST[usite2]', fonte='$_POST[fonte2]', tfonte='$_POST[tfonte2]', ttitulo='$_POST[ttitulo2]', coronmouse='$nova_coronmouse', cortexto='$nova_cortexto', corcelula1='$nova_corcelula1', corcelula2='$nova_corcelula2', corfundosite='$nova_corfundosite', qts_ultimos='$_POST[qts_ultimos2]' WHERE id='$id'");
$sql2 = mysql_query("UPDATE poll_config SET bgcolor_tab='$nova_corcelula2', font_color='$nova_cortexto', font_face='$_POST[fonte2]' WHERE config_id = '$id'");
?>
<meta http-equiv="refresh" content="0;URL=?pg=gal-configurar.php&pag=form&id=<? echo $id?>">
<br>
<center>
<h3>CONFIGURAÇÕES ALTERADAS COM SUCESSO!</h3><BR>
  <br>
  <a href='?pg=gal-configurar.php&pag=form&id=<? echo $id?>'>Voltar</a></font>
</center>
<? }?>
