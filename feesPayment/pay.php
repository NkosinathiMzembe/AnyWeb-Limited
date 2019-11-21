<?php

function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}
?>
