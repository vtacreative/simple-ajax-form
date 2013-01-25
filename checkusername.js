function check_username(uname) {
	if(ajax) {
		ajax.open('get','checkusername.php?uname=' + encodeURIComponent(uname));
		ajax.onreadystatechange = handle_check;
		ajax.send(null)
	} 
	else {
		document.getElementById('uname_label').innerHTML = 'The availability of this username will be confirmed upon submission.';
	}
}

function handle_check() {
	if((ajax.readyState == 4) && (ajax.status == 200)) {
		document.getElementById('uname_label').innerHTML = ajax.responseText;
	}
}