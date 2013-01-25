function check_password(pass2) {
	if(ajax) {
		ajax.open('get','checkuserpass.php?pass2=' + encodeURIComponent(pass2));
		ajax.onreadystatechange = pass_check;
		ajax.send(null)
	} 
	else {
		document.getElementById('pass2_label').innerHTML = 'The availability of this username will be confirmed upon submission.';
	}
}
function pass_check() {
	if((ajax.readyState == 4) && (ajax.status == 200)) {
		document.getElementById('pass2_label').innerHTML = ajax.responseText;
	}
}