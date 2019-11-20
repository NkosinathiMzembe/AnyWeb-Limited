<?php
	function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function displayForm($id,$student_id,$course_name,$grade_score,$grade,$FormName) {
		echo "<br>";

		echo "<h3>$FormName</h3>";

		echo "
			<form method='POST' action='controller.php'>
				<input type='hidden' name='uid' value=$id>

				<label>Student_id</label>
				<input type='text' name='student_id' value=$student_id> 
				<br><br>
				
				<label>Course Name</label>
				<input type='text' id='course_name' name='course_name' value=$course_name>
				<br><br>

				<label>Grade Score</label>
				<input type='text' id='grade_score' name='grade_score' value=$grade_score>
				<br><br>

				<label>Grade</label>
				<input type='text' id='grade' name='grade' value=$grade>
				<br><br>

				<input type='submit' value='Add Record' name='add_record'>

			</form>";
	}
?>
//add read only to student_id & course