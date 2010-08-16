//	Smart Mini Tabs by Rob L Glazebrook.
//	Last edited: Feb. 10, 2006
//	This script is based on slayeroffice's focus slide navigation:		
//	http://slayeroffice.com/code/focus_slide/

window.onload = init;

var d=document;			// These four variables
var activeLI = 0;		// should not be
var currentLI = 0;		// edited unless you
var zInterval = null;	// really know your stuff

var SLIDE_STEP = 6;		// # of pixels to slide each step (higher is faster)
var RESIZE_STEP = 3;	// # of pixels to resize each step (higher is faster)

function init() {
	if(!document.getElementById || window.opera)return;

	mObj = d.getElementById("navheader");
	liObj = mObj.getElementsByTagName("li");
	aObj = mObj.getElementsByTagName("a");

	for(i=0;i<liObj.length;i++) { // create mouseovers/mouseouts for the li's and the ul
		liObj[i].xid = i;
		liObj[i].onmouseover = function() { initSlide(this.xid); }
	}
	mObj.onmouseout = function() { initSlide(currentLI); }

	// create the slider object
	slideObj = mObj.appendChild(d.createElement("div"));
	slideObj.id = "slider";

	// position the slider over the current li
	initActive(); 
	x = liObj[activeLI].offsetLeft;
	y = liObj[activeLI].offsetTop-3;
	slideObj.style.top = y + "px";
	slideObj.style.left = x + "px";
	slideObj.style.width = liObj[activeLI].offsetWidth + "px";
}

function initActive() { // discover the current tab by comparing anchor hrefs to the window href
	for(i=0;i<aObj.length;i++) {
		if(d.location.href.indexOf(aObj[i].href)>=0) {
			activeLI = currentLI = i;
		}
	}
	liObj[currentLI].className="current";	//set a class so the li can be styled
}

function initSlide(objIndex) {
	if(objIndex == activeLI)return;
	clearInterval(zInterval);
	activeLI = objIndex;
	destX = liObj[activeLI].offsetLeft;		// the desination location
	destW = liObj[activeLI].offsetWidth;	// the destination size
	intervalMethod = function() { doSlide(destX); }
	zInterval = setInterval(intervalMethod,10);
}

function doSlide(dX) { // move the slider div
	x = slideObj.offsetLeft;
	if(x+SLIDE_STEP<dX) {
		// if the x-value is less than its destination, move it to the right
		x+=SLIDE_STEP;
		slideObj.style.left = x + "px";
		doResize(destW);
	} else if (x-SLIDE_STEP>dX) {
		// if the x-value is more than its destination, move to the left
		x-=SLIDE_STEP;
		slideObj.style.left = x + "px";
		doResize(destW);
	} else  {
		// if the div is within SLIDE_STEP pixels, move it to the proper location
		slideObj.style.left = dX + "px";
		slideObj.style.width = destW +"px";
		clearInterval(zInterval);
		zInterval = null;
	}
}

function doResize(dW) { // resize the slider div -- similar in execution to doSlide
	w = slideObj.offsetWidth;
	if (slideObj.offsetWidth!=dW) {
		if (w+RESIZE_STEP<dW) {
			w+=RESIZE_STEP;
			slideObj.style.width = w + "px";
		} else if (w-RESIZE_STEP>dW) {
			w-=RESIZE_STEP;
			slideObj.style.width = w + "px";
		} else {
			slideObj.style.width = dW + "px";
		}
	}
}