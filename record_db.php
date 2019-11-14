<?php
	//declare variables for my database connection 
	define('SERVERNAME','localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'awl2021');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "";
	}

	//check db_class.php in wtech-exams
?>
