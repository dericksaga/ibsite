
<html>

<head>
<title>Emtodas.com - A sua festa começa e termina aqui!</title>
<link rel="stylesheet" type="text/css" href="emtodas.css">
<script language="Javascript">
function High(e)
{
	e.filters.alpha.opacity = 100;
}
function Low(e)
{
	e.filters.alpha.opacity = 80;
}
</script>
<script language="JavaScript">
fotoinicial = 0;
Secao=928;
Total=36;

menuatual=1;
menutotal=Math.ceil(Total/12)

anuncioFotos = new Image;
anuncioFotos.src = 'anuncio/anuncio_fotos.gif';


anuncioThumb = new Image;
anuncioThumb.src = 'anuncio/anuncio_thumb.gif';


ArrayFoto=new Array();

function Inicia()
{
	atualizamenu();
	document.form.total.value=Total;
	document.form.nro.value=1;
	document.form2.menuatual.value=menuatual;
	document.form2.menutotal.value=menutotal;
	document.FOTO.src=anuncioFotos.src;
	document.FOTO.src=ArrayFoto[1];
	eval('TDTHUMB1.className=\"fundoMenuFotos\";');
	eval('TDMENU1.className=\"fundoMenuFotos\";');
}

function semFoto()
{
document.FOTO.src='img/retirada.gif';
}

function semThumb(id)
{
eval('document.THUMB'+id+'.src=\"img/tn_retirada.gif\";');
}


function menu(link)
{
for (var i=1; i <= 12; i++)
{
	eval('TDTHUMB'+i+'.className=\"\";');
}

for (var i=1; i <= menutotal; i++)
{
	eval('TDMENU'+i+'.className=\"\";');
}
eval('TDMENU'+link+'.className=\"fundoMenuFotos\";');

if (document.form2.menuatual.value != link)
{
	document.form2.menuatual.value=link;
	menuatual=document.form2.menuatual.value;
	if (menuatual==1) {
		fotoinicial=0;} 
	else {
		fotoinicial=((link-1)*12);}
	atualizamenu();
	MudaFoto(fotoinicial+1);
}
}

function avancamenu()
{
for (var i=1; i <= 12; i++)
{
	eval('TDTHUMB'+i+'.className=\"\";');
}

if (document.form2.menuatual.value != document.form2.menutotal.value){
	document.form2.menuatual.value=(document.form2.menuatual.value) - (-1);
	menuatual=document.form2.menuatual.value;
	if (menuatual==1) {
		fotoinicial=0;} 
	else {
		fotoinicial=fotoinicial+12;}
	atualizamenu();}
else{
	document.form2.menuatual.value=1;
	menuatual=document.form2.menuatual.value;
	fotoinicial=0;
	atualizamenu();}

for (var i=1; i <= menutotal; i++)
{
	eval('TDMENU'+i+'.className=\"\";');
}
eval('TDMENU'+menuatual+'.className=\"fundoMenuFotos\";');

}

function retrocedemenu()
{
for (var i=1; i <= 12; i++)
{
	eval('TDTHUMB'+i+'.className=\"\";');
}

if (document.form2.menuatual.value != 1){
	document.form2.menuatual.value=(document.form2.menuatual.value) - (1);
	menuatual=document.form2.menuatual.value;
	if (menuatual==1) {
		fotoinicial=0;}
	else {
		fotoinicial=fotoinicial-(12);}
	atualizamenu();}
else{
	document.form2.menuatual.value=menutotal;
	menuatual=document.form2.menuatual.value;
	fotoinicial=((menutotal-1)*12);
	atualizamenu();}
for (var i=1; i <= menutotal; i++)
{
	eval('TDMENU'+i+'.className=\"\";');
}
eval('TDMENU'+menuatual+'.className=\"fundoMenuFotos\";');

}

function atualizamenu()
{
	for (var j = 1; j <= 12; j++)
	{
		eval('document.THUMB'+j+'.src=anuncioThumb.src');
	}
	for (var i = 1; i <= 12; i++)
	{		
		ArrayFoto[fotoinicial+i] = ('fotos/' + Secao + '/' + (fotoinicial-(-i)) + '.jpg');
		if (fotoinicial-(-i) < Total-(-1))
		{
			eval('document.THUMB'+i +'.src=\"fotos/' + Secao + '/TN_' + (fotoinicial-(-i)) + '.jpg\";');
		} 
		else 
		{
			eval('document.THUMB'+i+'.src = \"img/sem_thumb.gif\"');
		}

	}
}


function MudaFoto(count)
{
	if (count < (Total-(-1))){
		for (var i=1; i <= 12; i++)
		{
			eval('TDTHUMB'+i+'.className=\"\";');
		}
		eval('TDTHUMB'+(count-fotoinicial)+'.className=\"fundoMenuFotos\";');
		document.form.nro.value=count;
		fotosel = ArrayFoto[count];
		document.FOTO.src=anuncioFotos.src;
		document.FOTO.src=fotosel;}
}

function AvancaFoto(count)
{
	if (count < (Total-(-1))){
		if (count > fotoinicial - (-12) || count <= fotoinicial) avancamenu();
		document.form.nro.value=count;
		fotosel = ArrayFoto[count];
		document.FOTO.src=anuncioFotos.src;
		document.FOTO.src=fotosel;}
	else
	{
		document.form.nro.value=1;
		fotosel = ArrayFoto[1];
		document.FOTO.src=anuncioFotos.src;
		document.FOTO.src=fotosel;
		avancamenu();
	}
	for (var i=1; i <= 12; i++)
	{
		eval('TDTHUMB'+i+'.className=\"\";');
	}
	eval('TDTHUMB'+(document.form.nro.value-fotoinicial)+'.className=\"fundoMenuFotos\";');
}

function RetrocedeFoto(count)
{
	if (count > 0){
		if (count <= fotoinicial) retrocedemenu();
		document.form.nro.value=count;
		fotosel = ArrayFoto[count];
		document.FOTO.src=anuncioFotos.src;
		document.FOTO.src=fotosel;}
	else
	{
		document.form.nro.value=Total;
		document.form.menuatual=1;
		retrocedemenu();
		fotosel = ArrayFoto[Total];
		document.FOTO.src=anuncioFotos.src;
		document.FOTO.src=fotosel;	
	}
	for (var i=1; i <= 12; i++)
	{
		eval('TDTHUMB'+i+'.className=\"\";');
	}
	eval('TDTHUMB'+(document.form.nro.value-fotoinicial)+'.className=\"fundoMenuFotos\";');
}

function enviar(foto)
{
window.open('fotos_enviar.asp?Secao='+Secao+'&Foto='+foto,'Enviar','toolbar=no,width=450,height=353,directories=no,scrollbars=no,status=no,resize=no,menubar=no');
}

function comprar(foto)
{
window.open('foto_comprar.asp?Secao='+Secao+'&Foto='+foto,'Comprar','toolbar=no,width=500,height=150,directories=no,scrollbars=no,status=no,resize=no,menubar=no');
}

function votar(foto)
{
window.open('fotos_votar.asp?Secao='+Secao+'&Foto='+foto,'Votar','toolbar=no,width=290,height=215,directories=no,scrollbars=no,status=no,resize=no,menubar=no');
}
</script>
</head>

<body topmargin="0" leftmargin="0" bgcolor="#303232" link="#000000" vlink="#000000"
alink="#000000" onload="Inicia();">
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="img/bg_topo.gif">
<tr>
<td valign="top" align="left"><a href="default.asp"><img src="img/bg_topoEsquerda.gif" width="239" height="72" border="0"></a></td>
<td width="100%" valign="top" align="right"><table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" valign="top" align="right" height="38" colspan="2"><img src="img/bg_topoDireita.gif" width="140" height="38"><br>
</td>
</tr>
<tr>
<td align="left" height="21" background="img/bg_topoBarra.gif" bgcolor="#CEE3A9"><img src="img/canto_topoBarra.gif" width="20" height="21"></td>
<td width="100%" height="21" background="img/bg_topoBarra.gif" bgcolor="#CEE3A9"><div align="center"><center><table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr>
<td align="center" valign="baseline"><a href="naftalina.asp"><img src="img/ico_naftalina.gif" width="52" height="15" border="0"></a></td><td align="center" valign="baseline"><img src="img/separaBarra.gif" width="4" height="16"></td>
<td align="center" valign="baseline"><a href="votacao.asp"><img src="img/ico_votacao.gif" width="42" height="15" border="0"></a></td><td align="center" valign="baseline"><img src="img/separaBarra.gif" width="4" height="16"></td>
<td align="center" valign="baseline"><a href="sorteios.asp"><img src="img/ico_sorteios.gif" width="45" height="15" border="0"></a></td><td align="center" valign="baseline"><img src="img/separaBarra.gif" width="4" height="16"></td>
<td align="center" valign="baseline"><a href="webcard.asp"><img src="img/ico_webcards.gif" width="51" height="16" border="0"></a></td><td align="center" valign="baseline"><img src="img/separaBarra.gif" width="4" height="16"></td>
<td align="center" valign="baseline"><a href="quemsomos.asp"><img src="img/ico_quemsomos.gif" width="61" height="16" border="0"></a></td><td align="center" valign="baseline"><img src="img/separaBarra.gif" width="4" height="16"></td>
<td align="center" valign="baseline"><a href="cadastro.asp"><img src="img/ico_cadastro.gif" width="40" height="15" border="0"></a></td>
</tr>
</table>
</center></div></td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" height="10" cellspacing="0" cellpadding="0">
<tr>
<td width="100%"></td>
</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr>
<td align="center"><table border="0" width="100%" cellpacing="0" cellpadding="0">
<tr>
<td align="center"><a href="fotos.asp"><img src="img/ico_fotos.gif" width="47" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></a></td>
<td align="center"><a href="agenda.asp"><img src="img/ico_agenda.gif" width="48" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></a></td>
<td align="center"><img src="img/ico_pimenta.gif" width="56" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></td>
</tr>
</table>
</td>
<td align="center"><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0' ID='Banner' WIDTH='468' HEIGHT='60'><param name='movie' value='anuncio/banner_emtodas.swf'><param name='quality' value='high'><param name='bgcolor' value='#FFFFFF'><embed src='anuncio/banner_emtodas.swf' quality='high' bgcolor='#FFFFFF' WIDTH='468' HEIGHT='60' TYPE='application/x-shockwave-flash' PLUGINSPAGE='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash'></object>
</td>
<td align="center"><table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><a href="invasao.asp"><img src="img/ico_invasao.gif" width="51" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></a></td>
<td align="center"><a href="guia.asp"><img src="img/ico_guia.gif" width="50" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></a></td>
<td align="center"><a href="mural.asp"><img src="img/ico_mural.gif" width="43" height="60" onmouseover="High(this);" onmouseout="Low(this);" style="FILTER: alpha(opacity=80)" border="0"></a></td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" height="10" cellspacing="0" cellpadding="0"><tr><td width="100%"></td></tr></table>

<table border="0" width="100%" cellpadding="0">
  <tr>
    <td width="100%" valign="top"><table border="0" width="100%" bgcolor="#727070"
    cellpadding="0">
      <tr>
        <td width="100%" valign="top"><table border="0" width="100%" cellspacing="0"
        cellpadding="0" bgcolor="#84C326">
          <tr>
            <td width="90%" height="15"><p style="margin-top: 1"><font face="Verdana" color="#FFFFFF"><strong><small><small><img
            src="img/tick_esquerdoUltimas.gif" width="17" height="12" align="left">e-Joy the moment - Rivage - 4.Jun.2005 (Sábado)</small></small></strong></font></td>
            <td width="10%" height="15" valign="top" align="right"><img
            src="img/canto_barraDireito.gif" width="24" height="16"></td>
          </tr>
          <tr>
            <td width="100%" bgcolor="#727070" height="2" colspan="2"></td>
          </tr>
        </table>
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="100%" bgcolor="#DFDFDE" valign="top"><table border="0" width="100%" height="5"
            cellspacing="0" cellpadding="0">
              <tr>
                <td width="100%"></td>
              </tr>
            </table>
            <div align="center"><center><table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="445" valign="top" align="center"><form name="form">
                  <div align="center"><center><table border="0" width="424" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="100%" height="15"><div align="right"><p><strong><small><small><small><font
                      face="Arial">Fotos: Rafael Regis e Jucinei Ferreira</font></small></small></small></strong></td>
                    </tr>
                  </table>
                  </center></div><table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="100%"><div align="center"><center><p><img src border="1" name="FOTO"
                      onError="semFoto();" alt="www.emtodas.com.br"></td>
                    </tr>
                    <tr align="center">
                      <td width="100%"><div align="center"><center><table border="0" width="100%"
                      cellspacing="0" cellpadding="0">
                        <tr>
                        <td width="34%" bgcolor="#848282" align="left"><a
                        href="javascript:RetrocedeFoto(document.form.nro.value-1);"><img
                        src="img/botao_fotosAnterior.gif" width="99" height="20" hspace="5" vspace="3" border="0"></a></td>
                        <td width="33%" bgcolor="#848282" align="left"><div align="center"><center><p><font
                        face="Verdana" color="#FFFFFF"><strong><input name="nro"
                        style="font-weight: bolder; font-size: 10px; color: rgb(255,255,255); font-family: verdana; text-align: right; background-color: rgb(132,130,130); border: medium none"
                        readOnly maxLength="3" size="3" value="1"><small><small> / </small></small></strong></font><input
                        name="total"
                        style="font-weight: bolder; font-size: 10px; color: rgb(255,255,255); font-family: verdana; background-color: rgb(132,130,130); border: medium none"
                        readOnly maxLength="3" size="3"></td>
                        <td width="33%" bgcolor="#848282" align="center"><a
                        href="javascript:AvancaFoto(document.form.nro.value-(-1))"><img
                        src="img/botao_fotosProxima.gif" width="91" height="20" hspace="5" vspace="3" border="0"
                        align="right"></a></td>
                        </tr>
                        <tr align="center">
                        <td width="100%" bgcolor="#C3C3C2" colspan="3"><div align="center"><center><p><a
                        href="javascript:enviar(document.form.nro.value);"><img src="img/ico_fotosEnviar.gif"
                        width="71" height="20" hspace="5" vspace="3" border="0"></a><a
                        href="javascript:votar(document.form.nro.value);"><img src="img/ico_fotosVotar.gif"
                        width="66" height="20" hspace="5" vspace="3" border="0"></a></td>
                        </tr>
                      </table>
                      </center></div></td>
                    </tr>
                  </table>
                </form>
                <p align="center">&nbsp;</td>
                <td width="2" align="center"></td>
                <td valign="top" align="center"><form name="form2">
                  <input type="hidden" name="menuatual" value="1"><input type="hidden" name="menutotal"
                  value="0"><table border="0" width="100%" height="8" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="100%"></td>
                    </tr>
                  </table>
                  <table border="0" cellspacing="4" cellpadding="4" height="318">
                    <tr>
                      <td align="center" id="TDTHUMB1" class><a href="javascript:MudaFoto(fotoinicial+1)"><img
                      border="0" src border="1" name="THUMB1" vspace="2" onAbort="Inicia();"
                      onError="semThumb(1);"></a></td>
                      <td align="center" id="TDTHUMB2" class><a href="javascript:MudaFoto(fotoinicial+2)"><img
                      border="0" src border="1" name="THUMB2" vspace="2" onAbort="Inicia();"
                      onError="semThumb(2);"></a></td>
                      <td align="center" id="TDTHUMB3" class><a href="javascript:MudaFoto(fotoinicial+3)"><img
                      border="0" src border="1" name="THUMB3" vspace="2" onAbort="Inicia();"
                      onError="semThumb(3);"></a></td>
                    </tr>
                    <tr>
                      <td align="center" id="TDTHUMB4" class><a href="javascript:MudaFoto(fotoinicial+4)"><img
                      border="0" src border="1" name="THUMB4" vspace="2" onAbort="Inicia();"
                      onError="semThumb(4);"></a></td>
                      <td align="center" id="TDTHUMB5" class><a href="javascript:MudaFoto(fotoinicial+5)"><img
                      border="0" src border="1" name="THUMB5" vspace="2" onAbort="Inicia();"
                      onError="semThumb(5);"></a></td>
                      <td align="center" id="TDTHUMB6" class><a href="javascript:MudaFoto(fotoinicial+6)"><img
                      border="0" src border="1" name="THUMB6" vspace="2" onAbort="Inicia();"
                      onError="semThumb(6);"></a></td>
                    </tr>
                    <tr>
                      <td align="center" id="TDTHUMB7" class><a href="javascript:MudaFoto(fotoinicial+7)"><img
                      border="0" src border="1" name="THUMB7" vspace="2" onAbort="Inicia();"
                      onError="semThumb(7);"></a></td>
                      <td align="center" id="TDTHUMB8" class><a href="javascript:MudaFoto(fotoinicial+8)"><img
                      border="0" src border="1" name="THUMB8" vspace="2" onAbort="Inicia();"
                      onError="semThumb(8);"></a></td>
                      <td align="center" id="TDTHUMB9" class><a href="javascript:MudaFoto(fotoinicial+9)"><img
                      border="0" src border="1" name="THUMB9" vspace="2" onAbort="Inicia();"
                      onError="semThumb(9);"></a></td>
                    </tr>
                    <tr>
                      <td align="center" id="TDTHUMB10" class><a href="javascript:MudaFoto(fotoinicial+10)"><img
                      border="0" src border="1" name="THUMB10" vspace="2" onAbort="Inicia();"
                      onError="semThumb(10);"></a></td>
                      <td align="center" id="TDTHUMB11" class><a href="javascript:MudaFoto(fotoinicial+11)"><img
                      border="0" src border="1" name="THUMB11" vspace="2" onAbort="Inicia();"
                      onError="semThumb(11);"></a></td>
                      <td align="center" id="TDTHUMB12" class><a href="javascript:MudaFoto(fotoinicial+12)"><img
                      border="0" src border="1" name="THUMB12" vspace="2" onAbort="Inicia();"
                      onError="semThumb(12);"></a></td>
                    </tr>
                  </table>
                  <div align="center"><center><table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="100%" height="19"></td>
                    </tr>
                  </table>
                  </center></div><div align="center"><center><table border="0" width="100%" cellpadding="0"
                  bgcolor="#C3C3C2">
                    <tr>
                      <td valign="middle"><strong><small><font face="Verdana"><img
                      src="img/ico_fotosPaginas.gif" width="77" height="15" hspace="5" vspace="4"></font></small></strong></td>
                      <td width="100%" valign="middle"><table border="0" cellspacing="0" cellpadding="0"
                      width="100%">
                        <tr>
<td align='center' id='TDMENU1' class=''><font face='Verdana'><small>&nbsp;<a href=javascript:menu(1)>1</a>&nbsp;</small></font></td><td align='center' id='TDMENU2' class=''><font face='Verdana'><small>&nbsp;<a href=javascript:menu(2)>2</a>&nbsp;</small></font></td><td align='center' id='TDMENU3' class=''><font face='Verdana'><small>&nbsp;<a href=javascript:menu(3)>3</a>&nbsp;</small></font></td>
                        </tr>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </center></div>
                </form>
                <p align="center"><br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                </td>
              </tr>
            </table>
            </center></div><p align="center"><br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
