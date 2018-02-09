<?php
	$user_name = $_POST[ 'user_name' ];
	$name = $_POST[ 'name' ];
	$mname = $_POST[ 'mname' ];
	$lname = $_POST[ 'lname' ];
	$address = $_POST[ 'address' ];
	$birthday = $_POST[ 'birthday' ];
	$email = $_POST[ 'email' ];
	$gender = $_POST[ 'gender' ];
	$DB->query("UPDATE clients SET name = '$name', mname = '$mname', lname = '$lname', address = '$address', 
		birthday = '$birthday', email = '$email', gender = '$gender' WHERE user_name = '$user_name'");
		header( "Location: " . SITE_URL . "/?page=account" );

?>