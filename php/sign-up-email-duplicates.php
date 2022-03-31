<?php
	include 'connection.php';

	$signUpEmail = $_GET["signUpEmail"];

	$resultSitter = mysqli_query( $con, "SELECT sitterEmail FROM sitters WHERE sitterEmail = '" .$signUpEmail. "'");

	$row = mysqli_num_rows( $resultSitter );

	if ( $row == 0 ) {
		$resultUser = mysqli_query( $con, "SELECT userEmail FROM users WHERE userEmail = '" .$signUpEmail. "'");

		$row = mysqli_num_rows( $resultUser );
	}

	print_r( $row );
?>
