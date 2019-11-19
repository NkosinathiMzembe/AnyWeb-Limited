<?php
require 'record_db.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Report</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">

</head>
<body>

<?php
	if (isset($_POST['rclicked'])) {

		// get the submitted username and password
		$Student_id = $_POST['student_id'];
		$pass = $_POST['upass'];
		$hpass = password_hash($pass, PASSWORD_DEFAULT);

 
		// create sql query to insert user into the database
		$sql = "INSERT INTO student_rec(student_id,Password) VALUES('$Student_id','$hpass')";

		//run the query and store result
		$result = mysqli_query($connection,$sql);
		
		//check if results were retrieved
		if ($result > 0) {
	    	// redirect user to login page
			header("Location: student_login.php");
		} 
		else {
	    	// redirect user to register page
			header("Location: student_register.php");
			// display error
			echo "Registration failed";
		}
	}


	else if (isset($_POST['lclicked'])) {

		// get the submitted username and password
		$student_id = $_POST['student_id'];
		$pass = $_POST['upass'];
		$hpass = password_hash($pass, PASSWORD_DEFAULT);

		if (password_verify($pass, $hpass)==true){
			$sql = "SELECT * FROM Student_Grade WHERE student_id='$student_id'";
			$result = mysqli_query($connection,$sql);
			$resultCheck = mysqli_num_rows($result);

			//check if results were retrieved
			if ($resultCheck > 0) {
				echo "Welcome " . "Your semester results is as follow<br>";

				echo("<table><tr>
					<th>Student ID</th>
					<th>Course Name</th>
					<th>Grade Score</th>
					<th>Grade</th>");

			// fetch result as an array
		    while ($row = mysqli_fetch_assoc($result)){
			       		//display grades
			       		echo (
			       		"<tr><td>" . $row["student_id"] . 
			       		"</td><td>". $row["course_name"] .	 
			       		"</td><td>". $row["grade_score"]  .
			       		"</td><td>". $row["grade"]  .
			       		"</td></tr>");
			    		
			    	}
			
			        echo "</table>";
			    			}

			    	}

			else{
			    echo "Login failed";

			    }
			}



	//	close database connection
		mysqli_close($connection);
		?>
</body>
</html>
