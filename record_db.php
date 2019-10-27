<?php
	//declare variables for my database connection 
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'student_report');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
	}
?>
