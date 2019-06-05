<?php

include  __DIR__ . "/../handler/caller.php";
call("env");

	$dbhost = env('DB_HOST');
	$dbuser = env('DB_USERNAME');
	$dbpass = env('DB_PASSWORD');
	$dbname = env('DB_NAME');
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_select_db($conn, $dbname);


?>
