<?
$campo = "texto";
?>


<SCRIPT>
function storeCaret(cursorPosition) {
 	if (cursorPosition.createTextRange) cursorPosition.caretPos = document.selection.createRange().duplicate();
}

function AddMessageCode<? echo $campo?>(code, promptText, InsertText) {
	var elem=document.form.<? echo $campo?>;
	var selecao = document.selection.createRange();
	var <? echo $campo?> = selecao.text;
	var caretPos = elem.caretPos;	
	if (code != "") {
			if(<? echo $campo?>=="") {
			insertCode = prompt(promptText + "\n<" + code + ">Seu texto aparecerá entre estas marcações</" + code + ">", InsertText);
				if ((insertCode != null) && (insertCode != "")){
					document.form.<? echo $campo?>.value += "<" + code + ">" + insertCode + "</" + code + ">";
				}
			}
			else {
				caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? '<'+code+'>'+<? echo $campo?>+'</'+code+'>' : '<'+code+'>'+<? echo $campo?>+'</'+code+'>';
			}
	}
				
	document.form.<? echo $campo?>.focus();
}

function AddCode<? echo $campo?>(code) {
if ((code != "") && (code == "URL")) {
		insertText = prompt("Digite o texto que será linkado", "");
				
				if ((insertText != null) && (insertText != "") && (code == "URL")){
					insertCode = prompt("Digite o link (ele deve começar por http://. Exemplo: http://www.flogao.com.br)", "http://");
						
						if ((insertCode != null) && (insertCode != "") && (insertCode != "http://")){					
							document.form.<? echo $campo?>.value += "<a href=" + insertCode + " target=_blank>" + insertText + "</a>";
						}
				}		
}
	
if ((code != "") && (code == "EMAIL")) {
			insertText = prompt("Digite o texto que será linkado para um email", "");
				
				if ((insertText != null) && (insertText != "")){
					insertCode = prompt("Digite o endereço de email", "");
						
						if ((insertCode != null) && (insertCode != "")){					
						document.form.<? echo $campo?>.value += "<a href=mailto:" + insertCode + ">" + insertText + "</a>";
					}
				}
}	
}
</SCRIPT>


<a href="javascript:AddMessageCode<? echo $campo?>('b','Digite o texto a ser formatado em negrito', '');"><img src="../estrutura/noticias/imgs/bold.gif" alt="Negrito" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('i','Digite o texto a ser formatado em itálico', '');"><img src="../estrutura/noticias/imgs/italic.gif" alt="Itálico" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('u','Digite o texto a ser sublinhado', '');"><img src="../estrutura/noticias/imgs/underline.gif" alt="Sublinhado" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('s','Digite o texto a ser riscado', '');"><img src="../estrutura/noticias/imgs/strike.gif" alt="Riscado" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('sub','Digite o texto a aparecer subescrito', '');"><img src="../estrutura/noticias/imgs/sub.gif" alt="Subescrito" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('sup','Digite o texto a aparecer sobrescrito', '');"><img src="../estrutura/noticias/imgs/sup.gif" alt="Sobrescrito" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('tt','Digite o texto a ser formatado em teletype', '');"><img src="../estrutura/noticias/imgs/tele.gif" alt="Teletype font" width="23" height="22" border="0"></a>
<a href="javascript:AddMessageCode<? echo $campo?>('marquee','Digite o texto que quer que fique se movimentando na página', '');"><img src="../estrutura/noticias/imgs/move.gif" alt="Texto em movimento" width="23" height="22" border="0"></a>
<a href="Javascript:AddCode<? echo $campo?>('EMAIL');"><img src="../estrutura/noticias/imgs/email2.gif" alt="E-mail link" width="23" height="22" border="0"></a>
<a href="Javascript:AddCode<? echo $campo?>('URL');"><img src="../estrutura/noticias/imgs/url.gif" alt="Inserir Link" width="23" height="22" border="0"></a>

