<?
//include("path2.php");
$sql = mysql_query("SELECT * FROM noticias_dados where id='$_GET[id]'");
$sql2 = mysql_query("SELECT * FROM noticias_dados order by id desc LIMIT $qts_ultimos");
$dados = mysql_fetch_array($sql);

?><br> 
<table width="490" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="middle"> <table width='95%' border='0' align="center" cellpadding='2' cellspacing="0">
        <tr> 
          <td align="center" bgcolor="#eaedfc"><span style="color:#5f6160; font-family:'Times New Roman', Times, serif; font-weight:bold; font-size:20px;"><? echo nl2br ($dados['titulo']);?></span></td>
        </tr>
        <? if($dados[subtitulo] != ""){?>
        <? }?>
        <tr> 
          <td align="center" class="noticia2" style="border-bottom:3px #eaedfc solid; "><? echo $dados['subtitulo']?></td>
        </tr>
        <tr> 
          <td valign="top" align="justify" class="textao" style="border-bottom:3px #eaedfc solid; "> <br />
            <?
	if($dados[foto01] != "") {
	echo "<div align='$dados[alinhamento_foto]'>";
	if($dados[creditos_foto] != "") {
	echo "<font size='1'>Foto: <b><i>$dados[creditos_foto]&nbsp;</i></b></font>";
	}
	if($dados[largura_foto] == ""){ $largura = 200;} else { $largura = $dados[largura_foto];}
	//if($dados[altura_foto] != ""){ $altura = "&w=$dados[altura_foto]"; }
	echo "</div><img src='thumbs.php?w=$largura&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]' align='left'>"; }
	$texto = nl2br($dados[texto]);
	echo "<div align='justify'>$texto<br><br></div>";
	?>
             </td>
        </tr>	
        <tr> 
          <td align="right" class="noticia3" style="border-bottom:3px #eaedfc solid; ">Postado em <b> 
            <?
	$data = explode("-", $dados[data]);
$data = "$data[2]/$data[1]/$data[0]";
echo $data; ?>
            </b> 
            <? if($dados[nome] != ""){?>
            por
            <? }?>
            <b class="noticia2"> <a href=mailto:<?=$dados['email']?>><?=$dados['nome']?></a></b></td>
        </tr>
      </table>
    </td>
	<tr>
		<td>&nbsp;</td>
	</tr>
  </tr>
</table>