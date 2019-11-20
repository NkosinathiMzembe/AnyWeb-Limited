<?php
require('pay.php');
//session_start();
require('account.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['send'])) {
			$myCountry = sanitizeData($_POST['country']);
			$mylName = sanitizeData($_POST['lname']);
			$myfName = sanitizeData($_POST['fname']);
            $myAmount = sanitizeData($_POST['amount']);
			$myStudentId = sanitizeData($_POST['studentId']);
			$myCard = sanitizeData($_POST['creditCard']);

			$account_object = new Account($myCountry=$myCountry,$mylName=$mylName,$myfName=$myfName,$myAmount=$myAmount,$myStudentId=$myStudentId,$myCard);

			if(empty($myStudentId)) {
				$account_object->create();

				header("Location: .");
			} else {
				$account_object->update();

				header("Location: .");
			}
		}
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['read'])) {
			$myCountry = sanitizeData($_POST['country']);
			$mylName = sanitizeData($_POST['lname']);
			$myfName = sanitizeData($_POST['fname']);
            $myAmount = sanitizeData($_POST['amount']);
			$myStudentId = sanitizeData($_POST['studentId']);
			$myCard = sanitizeData($_POST['creditCard']);

			$account_object = new Account($myCountry=$myCountry,$mylName=$mylName,$myfName=$myfName,$myAmount=$myAmount,$myStudentId=$myStudentId,$myCard);

			if(empty($myStudentId)) {
				$account_object->create();

				header("Location: .");
			} else {
				$account_object->update();

				header("Location: .");
			}
		}
	}

?>