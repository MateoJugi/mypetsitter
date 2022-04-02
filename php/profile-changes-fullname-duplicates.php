<?php
	include 'connection.php';

	$profileChangesFullName = $_GET["profileChangesFullName"];
	$profileID = $_GET["profileID"];

	$result = mysqli_query( $con, "SELECT sitterID, sitterFullName FROM sitters WHERE sitterFullName = '" .$profileChangesFullName. "' AND sitterID != '" .$profileID. "'");

	$row = mysqli_num_rows( $result );

	if ( $row == 0 ) {
		$resultUser = mysqli_query( $con, "SELECT userID, userFullName FROM users WHERE userFullName = '".$profileChangesFullName."' AND userID != '" .$profileID. "'");

		$row = mysqli_num_rows( $resultUser );
	}

	print_r( $row );
?>
