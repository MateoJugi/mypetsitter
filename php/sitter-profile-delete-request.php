<?php
	include 'connection.php';

	$profileDeleteSitterID = mysqli_real_escape_string( $con, $_GET["profileDeleteSitterID"] );

	$deleteSitter = mysqli_query( $con, "DELETE FROM sitters WHERE sitterID = $profileDeleteSitterID" );

	$deleteSitterPetsConnection = mysqli_query( $con, "DELETE FROM sitterspetsconnection WHERE sitterID = $profileDeleteSitterID" );

	$deleteSittersServicesConnection = mysqli_query( $con, "DELETE FROM sittersservicesconnection WHERE sitterID = $profileDeleteSitterID" );

	/* Update AUTO INCREMENT of sitterID */

	/* $getSittersCount = mysqli_query( $con, "SELECT COUNT(sitterID) FROM sitters" );

	$sittersCount = mysqli_fetch_array( $getSittersCount )[0];

	$updateSitterIds = mysqli_query( $con, "ALTER TABLE sitters AUTO_INCREMENT = $sittersCount" ); */
?>
