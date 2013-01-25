<?php
	error_reporting(E_ALL);
	define('CREATE_USERS_TABLE',"CREATE table users(
		uid integer primary key,
		uname text not null,
		upass text not null,
		fname text not null,
		lname text not null,
		email text not null)");
	$dbc = new SQLiteDatabase("users.db",0644);
	//$dbc->query('DROP TABLE users');
	//@$dbc->query(CREATE_USERS_TABLE);
	$res = $dbc->query("SELECT * FROM users",SQLITE_ASSOC);
	echo '<br /><br /><fieldset><h3>Current Users</h3>';
	foreach($res as $row) {
	    var_dump($row);
	}
	echo '</fieldset><br /><br /><p> 
		<a href="user_tables.php">reset_db</a></p><br />';
	?>