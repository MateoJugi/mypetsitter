<?php
	include 'connection.php';

	$signUpFullName = $_GET["signUpFullName"];

	$resultSitter = mysqli_query( $con, "SELECT sitterFullName FROM sitters WHERE sitterFullName = '" .$signUpFullName. "'");

	$row = mysqli_num_rows( $resultSitter );

	if ( $row == 0 ) {
		$resultUser = mysqli_query( $con, "SELECT userFullName FROM users WHERE userFullName = '" .$signUpFullName. "'");

		$row = mysqli_num_rows( $resultUser );
	}

	print_r( $row );
?>
