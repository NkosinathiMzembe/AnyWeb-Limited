<?php
	function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function displayForm($id,$name,$phone,$form_title) {
		echo "<br>";

		echo "<h3>$form_title</h3>";

		echo "
			<form method='POST' action='controller.php'>
				<input type='hidden' name='uid' value=$id>

				<label>Name</label>
				<input type='text' id='uname' name='uname' value=$name>
				<br><br>

				<label>Phone Number</label>
				<input type='text' id='uphone' name='uphone' value=$phone>
				<br><br>

				<input type='submit' value='Submit' name='add_button'>

			</form>";
	}
?>