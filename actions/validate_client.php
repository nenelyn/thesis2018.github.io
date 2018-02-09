<?php

	$admin_id = $_POST[ 'admin_id' ];
	$user_name = $_POST[ 'user_name' ];
	$name = $_POST[ 'name' ];
	$mname = $_POST[ 'mname' ];
	$lname = $_POST[ 'lname' ];
	$address = $_POST[ 'address' ];
	$birthday = $_POST[ 'birthday' ];
	$email = $_POST[ 'email' ];
	$user_pass = $_POST[ 'user_pass' ];
	$gender = $_POST[ 'gender' ];

$handle  =  mysql_connect("sql12.freemysqlhosting.net", "sql12219673", "4vcRRZmtNc") or die(mysql_error());

  mysql_query("USE sql12219673",$handle);
  $query = "SELECT * FROM admins";
  $result = mysql_query($query);
while ($data = mysql_fetch_object($result)){
      $admin_id = $data->admin_id;
 
}
	$DB->query( "INSERT INTO clients ( admin_id, user_name, name, mname, lname, address, birthday, email, user_pass, gender ) VALUES( '$admin_id','$user_name','$name','$mname','$lname', '$address', '$birthday', '$email', '$user_pass','$gender' )" );
	header( "Location: " . SITE_URL . "/?page=success" );
?>