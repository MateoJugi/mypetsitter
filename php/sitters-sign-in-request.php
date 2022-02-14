<?php
	include 'connection.php';

	$signInEmail = mysqli_real_escape_string( $con, $_GET["signInEmail"] );
	$signInPassword = mysqli_real_escape_string( $con, $_GET["signInPassword"] );

	$result = mysqli_query( $con, "SELECT sitterEmail, sitterPassword FROM sitters WHERE sitterEmail = BINARY '".$signInEmail."' AND sitterPassword = BINARY '".$signInPassword."'" );

	$row = mysqli_num_rows( $result );

	if ( !$row == 0 ) {
		session_start();

		$_SESSION["signInEmail"] = $signInEmail;
		$_SESSION["signInPassword"] = $signInPassword;
	}

	print_r($row);
?>
