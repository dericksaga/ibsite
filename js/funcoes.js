// JavaScript Document

// verify required fields
function checkrequired(form) {
	var pass = true;
	for(i = 0; i < form.length; i++) {
		var tempobj = form.elements[i];
		if(tempobj.alt == "required") {
			if(tempobj.value == '') {
				pass = false;
				break;
			}
		}
	}
	if(!pass) {
		alert("Entre com as informações solicitadas.");
		tempobj.focus(); // set focus to missing field
		return false;
	}
	else { return true; } 
}

// image swap for view page
function swap(target, fname) {
	document[target].src = "fotos/" + fname;
}

// marca sure at least one search criteria has been provided
function checksearch(form) {
	var count = 0;
	
	for(i = 0; i < form.length; i++) {
		var tempobj = form.elements[i];
		if(tempobj.value == '') {
			count++;
		}
	}
	i-=2;
	if(count == i) {
		alert("Selecione um critério para realizar uma busca.");
		return false;
	}
	else {
		//alert("You DID enter search criteria." + count + "  " + i);
		return true;
	} 
}

// confirm removal of vehicle listing
function verify_removal(codigo) {
	msg = "Você tem certeza de que deseja remover este veículo do sistema?";
	if(confirm(msg)) {
		window.location='apagar.php?codigo=' + codigo;
	} else {
		return false;
	}
}

// confirm removal of image from vehicle listing
function verify_image(imageid, codigo) {
	msg = "Você tem certeza de que deseja remover esta foto?";
	if(confirm(msg)) {
		window.location='?pg=../estrutura/imoveis/apagar_foto.php&id=' + imageid + '&codigo=' + codigo;
	} else {
		return false;
	}
}

// display invalid cadastro number message
function invalid_cadastro(cadastro) {
	msg = "O número de cadastro: " + cadastro + " é inválido.";
	if(confirm(msg)) {
		window.location='controle.php';
	} else {
		window.location='controle.php';
	}
}
