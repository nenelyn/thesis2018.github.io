<?php
	$user_name = $_POST[ 'user_name' ];
	$user_pass = $_POST[ 'user_pass'];
	$res = $DB->query( "SELECT * FROM clients WHERE user_name = '$user_name' AND user_pass = '$user_pass'" );
	if( $res && $res->num_rows ) {
		$user = $res->fetch_object();
		$_SESSION[ AUTH_NAME ] = $user->user_name;
		$_SESSION[ AUTH_PASS ] = $user->user_pass;
		$_SESSION[ AUTH_TYPE ] = $user->utype;
		header( "Location: " . SITE_URL . "/?page=account");
	} else {
		header( "Location: " . SITE_URL . "/?page=login&invalid=1");
	}
	?>