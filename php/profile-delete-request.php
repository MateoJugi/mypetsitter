<?php
	include 'connection.php';

	$profileType = $_GET["profileType"];
	$profileID = $_GET["profileDeleteID"];

	if ( $profileType == "sitterProfile" ) {
		$deleteSitter = mysqli_query( $con, "DELETE FROM sitters WHERE sitterID = $profileID" );

		$deleteSitterPetsConnection = mysqli_query( $con, "DELETE FROM sitterspetsconnection WHERE sitterID = $profileID" );

		$deleteSittersServicesConnection = mysqli_query( $con, "DELETE FROM sittersservicesconnection WHERE sitterID = $profileID" );
	} else {
		$deleteUser = mysqli_query( $con, "DELETE FROM users WHERE userID = $profileID" );
	}
?>