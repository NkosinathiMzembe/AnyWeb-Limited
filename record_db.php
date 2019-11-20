<?php
	//declare variables for my database connection 
	define('SERVERNAME','localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'awldb2021');

	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "";
	}
?>

<?php 
/**
 * Database Connection
 */
// class connect 
// {
// 	//properties
// 	public $connection = null;

// 	//connection 
// 	function db_conn(){
// 		$this -> $connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

// 		// Check connection
// 		if (!$connection) {
// 			die("Connection failed: " . mysqli_connect_error());
// 		}else{
// 			echo "";
// 		}
// 	}
// }

?>
