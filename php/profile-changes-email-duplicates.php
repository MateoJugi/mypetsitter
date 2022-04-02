<?php
	include 'connection.php';

	$profileChangesEmail = $_GET["profileChangesEmail"];
	$profileID = $_GET["profileID"];

	$result = mysqli_query( $con, "SELECT sitterID, sitterEmail FROM sitters WHERE sitterEmail = '".$profileChangesEmail."' AND sitterID != '" .$profileID. "'");

	$row = mysqli_num_rows( $result );

	if ( $row == 0 ) {
		$resultUser = mysqli_query( $con, "SELECT userID, userEmail FROM users WHERE userEmail = '".$profileChangesEmail."' AND userID != '" .$profileID. "'");

		$row = mysqli_num_rows( $resultUser );
	}

	print_r( $row );
?>
