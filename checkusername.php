<?php
if(isset($_GET['uname'])) {
	$dbc = new SQLiteDatabase("users.db");
	
	/* run the proposed username against the db */
	$r = $dbc->query(sprintf("SELECT uid FROM users WHERE uname='%s'",
									 sqlite_escape_string(trim($_GET['uname']))));
									
	if(($r->numRows()) == 1) {
		echo ' Sorry, the username <b><i>' . $_GET['uname'] . ' </i></b> is already taken.';
	} else {
		echo ' Congratulations! The username <b><i>' . $_GET['uname'] . ' </i></b> is available.';
	}
	//sqlite_close($dbc);
} else {
	echo 'Please enter a username.';

}