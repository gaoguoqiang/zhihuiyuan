//eightsystem

function worda (){
	var oIn = document.getElementById("eight-word-a");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-a');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordb (){
	var oIn = document.getElementById("eight-word-b");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-b');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordc (){
	var oIn = document.getElementById("eight-word-c");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-c');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordd (){
	var oIn = document.getElementById("eight-word-d");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-d');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function worde (){
	var oIn = document.getElementById("eight-word-e");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-e');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordf (){
	var oIn = document.getElementById("eight-word-f");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-f');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordg (){
	var oIn = document.getElementById("eight-word-g");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-g');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
function wordh (){
	var oIn = document.getElementById("eight-word-h");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('eight-word-h');
    switch(event.type){
            case "touchstart":
            oInp.style.top="-100%";
            break;
            case "touchend":
            oInp.style.top="0";
        }
    }
}
window.addEventListener('load',worda,false);
window.addEventListener('load',wordb,false);
window.addEventListener('load',wordc,false);
window.addEventListener('load',wordd,false);
window.addEventListener('load',worde,false);
window.addEventListener('load',wordf,false);
window.addEventListener('load',wordg,false);
window.addEventListener('load',wordh,false);