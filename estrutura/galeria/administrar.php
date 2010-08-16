<? 	require 'funcoes.php'; 
	$idgaleria = $_GET[id];
	$sql= mysql_query("SELECT * FROM fotos_galerias where id = $idgaleria");
	while ($dados=mysql_fetch_array($sql)){				
	echo "<h1>Galeria: ''".$dados[nome]."''</h1>";
	}

?>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class='trim'>
  <tr >
    <td height="25" colspan="3" valign="bottom" class='highlight'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b class="texto2">Adicione 
      uma foto</b></font></td>
    <td height="25" valign="bottom" class='highlight'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b class="texto2">Fotos 
      adicionadas</b></font></td>
  </tr>
  <tr >
    <form action='?pg=../estrutura/galeria/adicionar_fotos.php&id=<?=$idgaleria?>' method="post" enctype='multipart/form-data' onsubmit='return checkrequired(this)'>
      <td height="25" colspan="2" valign='top' class='hint'><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <font size="1">
        <?
			// only display image upload form if GD version meets requirements
			if(checkgd()) {
				echo "
				<input type=file name='image' alt='required' style='width:250'> <br>
				<br>
				<b>Aten&ccedil;&atilde;o:</b><br>
				Utilize fotos pequenas e em JPEG.<br><br>
				Comentário <textarea id='coment' name='coment' rows='7' style='vertical-align:top;' ></textarea><br><br>
				<input type=hidden name='evento' value='$idgaleria'>
				";
			} else {
				echo "
				Erro <b>GDGraphicsLibrary2</b>
				Todas as fun&ccedil;&otilde;es de imagens est&atilde;o desabilitadas.<br>
				Entre em contato com o desenvolvedor.";
			}
			?>
      </font></font>
        <div align="left"><b>Foto do dia?
            <label>
            <input name="fotodia" type="radio" id="destaque" value="1" checked="checked" />
            sim</label>
          </b><b>
            <label>
              <input type="radio" name="fotodia" id="destaque2" value="0" />
              n&atilde;o </label>
          </b></div><br />
      <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><font size="1">        </font> </font><input class='texto2' type=submit value='Enviar'></td>
    </form>
    <td height="25" colspan="2" align="center" valign='top' class='hint'><table border="0" align="center" cellpadding="0" cellspacing="5">
      <?
			// get images for this listing and display thumbnails
				$sql3 = mysql_query("SELECT * FROM fotos where codigo = $idgaleria order by id desc");
				
				$n = 1; // counter for thumb display
				while($row = mysql_fetch_array($sql3) or die()) {
					if($n % 2) { echo "<tr><td width=40><!-- SPACER --></td>"; } // if n is odd, start a new row
					// display data
					if($row[fotodia] <> 0){$complemento = "bgcolor='yellow'";
					} else {$complemento = ""; }
					echo "
					<td width=140 valign='top' $complemento align='center'>
						<img src='../images/miniaturas/$row[thumb]' vspace=5><br>
						$evento <br>
						<form action='?pg=../estrutura/galeria/alterar_coment.php&idgaleria=$idgaleria' method='post' enctype='alteracomentario' name='alteracomentario' style='margin:0px;'>
						<textarea id='comentfoto' name='comentfoto' rows='5' style='width:125px; font-size:12px;' >$row[coment]</textarea>
						<input type='hidden' name='iddafoto' value='$row[id]'>
						<div align='center'><b>Foto do dia?<br />
						<label><input name='fotodia' type='radio' id='destaque' value='1' ";
						if ($row[fotodia] == 1){echo "checked";}
						echo "/>sim</label></b><b><label><input type='radio' name='fotodia' id='destaque2' value='0' ";
						if ($row[fotodia] == 0){echo "checked";}
						echo " />n&atilde;o </label></b></div>
						<input type='submit' value='Alterar' style='width:125px;'></form>
						<form action='?pg=../estrutura/galeria/apagar_foto.php&id=$row[id]&idgaleria=$idgaleria' method='post' enctype='exclui' name='exclui' >
						<input type='hidden' name='iddafoto' value='$row[id]'>
						<input type='submit' value='Excluir' style='width:125px;'></form>
					</td>
					";
					if(!($n % 2)) { echo "</tr>"; } // if n is even, end row
					$n++;
				}
				if(($n - 1) % 2) { echo "</tr>"; } // if the last item was odd, end row
				
			?>
    </table>
        <div align="center"></div></td>
  </tr>
</table>