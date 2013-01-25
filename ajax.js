var ajax = false;

if(window.XMLHttpRequest){
	ajax = new XMLHttpRequest();
	} 
else if(window.ActiveXObject) {
	try {ajax = new ActiveXObject("Msxml2.XMLHTTP");} catch(e1) {
		try {ajax = new ActiveXObject("Microsoft.XMLHTTP");} catch(e2) {
			}
		}
	}

if(!ajax) {
	alert('Some page functionality is unavailable.');
}