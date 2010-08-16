
function storeCaret(cursorPosition) {
 	if (cursorPosition.createTextRange) cursorPosition.caretPos = document.selection.createRange().duplicate();
}

function AddMessageCode(code, promptText, InsertText) {
	var elem=document.form.texto;
	var selecao = document.selection.createRange();
	var texto = selecao.text;
	var caretPos = elem.caretPos;	

	if (code != "") {
			if(texto=="") {
			insertCode = prompt(promptText + "\n<" + code + ">Seu texto aparecerá entre estas marcações</" + code + ">", InsertText);
				if ((insertCode != null) && (insertCode != "")){
					document.form.texto.value += "<" + code + ">" + insertCode + "</" + code + ">";
				}
			}
			else {
				caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? '<'+code+'>'+texto+'</'+code+'>' : '<'+code+'>'+texto+'</'+code+'>';
			}
	}
				
	document.form.comentario.focus();
}



function AddCode(code) {

if ((code != "") && (code == "URL")) {
		insertText = prompt("Digite o texto que será linkado", "");
				
				if ((insertText != null) && (insertText != "") && (code == "URL")){
					insertCode = prompt("Digite o link (ele deve começar por http://. Exemplo: http://www.flogao.com.br)", "http://");
						
						if ((insertCode != null) && (insertCode != "") && (insertCode != "http://")){					
							document.form.texto.value += "<a href=" + insertCode + " target=_blank>" + insertText + "</a>";
						}
				}		
}
	
	
	
if ((code != "") && (code == "EMAIL")) {
		
			insertText = prompt("Digite o texto que será linkado para um email", "");
				
				if ((insertText != null) && (insertText != "")){
					insertCode = prompt("Digite o endereço de email", "");
						
						if ((insertCode != null) && (insertCode != "")){					
						document.form.texto.value += "<a href=mailto:" + insertCode + ">" + insertText + "</a>";
					}
				}

}	


}
