// Configurações globais
var Up = 1;
var Down = 2;
var Left = 3;
var Right = 4;

var Ticker = "";

var Speed = 5;
var Offset = 1;

//Funções de engine
function Scroll(direction) {
	if (direction == Down) {
		document.getElementById('GalleryMenu2').scrollTop += Offset;
	}
	else if (direction == Left) {
		document.getElementById('GalleryMenu').scrollLeft -= Offset;
	}
	else if (direction == Right) {
		document.getElementById('GalleryMenu').scrollLeft += Offset;
	}
	else {
		document.getElementById('GalleryMenu2').scrollTop -= Offset;
	}
}

function StartScroll(direction) {
	Ticker = window.setInterval("Scroll(" + direction + ")",Speed);
}

function StopScroll() {
	window.clearInterval(Ticker);
}