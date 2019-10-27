<?php
	//declare variables for my database connection 
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'student_record');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
	}



	//check which button has been clicked - create a button on the page that when clicked, would lead you to the records page
  	
  	//this is for students. enter student id to check your report


	//action to take place when submit button is clicked for sign-in
	if (isset($_POST['lclicked'])) {

		// get the submitted username and password
		$student_id = $_POST['student_id'];
		$pass = $_POST['upass']; 

		// create sql query to select user from database
		$sql = "SELECT * FROM user WHERE Student_id='$student_id' && Password='$pass' ";

		
		//run the query and store result
		$result = mysqli_query($connection,$sql);

		//check if results were retrieved
		if (mysqli_num_rows($result) > 0) {
	    	// fetch result as an array
	        $row = mysqli_fetch_assoc($result);

	        // display result
	        echo ("Welcome" . $row['Username'] . "You have logged in");

	        //when student input's student_id, compare student id with id in report table

		/*if student_id == true; 
		echo "student name", term, report
		select * from $report
		display $report
		
		*/

		} else {
	    	// display error message
	    	echo "Your login failed";
	    	//else echo{incorrect student_id}
		}


		//create student database
		$student = "CREATE TABLE student(student_id INT() PRIMARY KEY AUTOGENERATED,
										 firstname CHAR(),
										 lastname CHAR())";

		//create course database
		$course = "CREATE TABLE course(course_id INT() PRIMARY KEY AUTOGENERATED,
										course_name VARCHAR())";

		//create lecture table. Lecturer can teach many courses


		//create record book table
		$report = "CREATE TABLE report(student_id INT() FOREIGN KEY,
										course_name VARCHAR(30) NOT NULL FOREIGN KEY,
										grade_score INT(4) NOT NULL,
										grade VARCHAR(3) NOT NULL)";


		

		/*if lecturer_id == true
		select * from $report

	think about this again. I don't think it is neccessary
		*/

		if (mysqli_query($connection,$sql)) {
  		    echo "Table report created successfully";
		} else {
    		echo "Error creating table: " . mysqli_error($Connection);
		}

		// get the submitted username and password
		$student_id = $_POST['student_id'];
		$course = $_POST['course'];
		$grade_score = ('grade_score');
		$grade = ('grade');

		// create sql query to insert user into the database
		$sql = "INSERT INTO report(student_id,course,grade_score,grade) VALUES('$student_id','course','grade_score','grade')";

		//run the query and store result
		$result = mysqli_query($connection,$sql);

/*
		// close database connection
	} else if (isset($_POST['rclicked'])) {

		// get the submitted username and password
		$name = $_POST['uname'];
		$pass = $_POST['upass'];
		$hash = md5($pass);

		// create sql query to insert user into the database
		$sql = "INSERT INTO user(Username,Password) VALUES('$name','$hass')";

		//run the query and store result
		$result = mysqli_query($connection,$sql);
		
		//check if results were retrieved
		if ($result > 0) {
	    	// redirect user to login page
			header("Location: login.php");
		} else {
	    	// redirect user to register page
			header("Location: register.php");
			// display error
			echo "Registration failed";
		}
*/

		// close database connection
		mysqli_close($connection);

	}
?>