<?php
$dbc = new SQLiteDatabase("users.db");
if (!empty($_POST['uname']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])) {	
	$uname = sqlite_escape_string($_POST['uname']);
	$pass1 = sqlite_escape_string($_POST['pass1']);
	$pass2 = sqlite_escape_string($_POST['pass2']);
	if($pass1 == $pass2){
		$upass = $pass2;
	} else { 
		die('passwords not matching'); 
		}
	$fname = sqlite_escape_string($_POST['fname']);
	$lname = sqlite_escape_string($_POST['lname']);
	$email = sqlite_escape_string($_POST['email']);

	$dbc->query("INSERT INTO users values(NULL,'$uname','$upass','$fname','$lname','$email')");
} else {
	echo 'Error: one or more of your fields is empty.';
}
$res = $dbc->query("SELECT * FROM users",SQLITE_ASSOC);
echo '<br><br><fieldset><h3>Current Users</h3>';
foreach($res as $row) {
    var_dump($row);
}
