<?php
	include 'connection.php';

	$profileDeleteSitterID = mysqli_real_escape_string( $con, $_GET["profileDeleteSitterID"] );

	$deleteSitter = mysqli_query( $con, "DELETE FROM sitters WHERE sitterID = $profileDeleteSitterID" );

	$deleteSitterPetsConnection = mysqli_query( $con, "DELETE FROM sitterspetsconnection WHERE sitterID = $profileDeleteSitterID" );

	$deleteSittersServicesConnection = mysqli_query( $con, "DELETE FROM sittersservicesconnection WHERE sitterID = $profileDeleteSitterID" );
?>
