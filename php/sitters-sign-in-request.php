<?php
	include 'connection.php';

	$signInEmail = mysqli_real_escape_string( $con, $_GET["signInEmail"] );
	$signInPassword = mysqli_real_escape_string( $con, $_GET["signInPassword"] );

	$result = mysqli_query( $con, "SELECT * FROM sitters WHERE sitterEmail = BINARY '".$signInEmail."' AND sitterPassword = BINARY '".$signInPassword."'" );

	$row = mysqli_num_rows( $result );

	echo $row;

	$rowText = mysqli_fetch_array( $result );

	if ( !$row == 0 ) {
		/* ----- Selecting sitters prefered pets ----- */

		$result2 = mysqli_query( $con, "SELECT pets.petType FROM sitterspetsconnection INNER JOIN pets ON sitterspetsconnection.petID = pets.petID WHERE sitterID = '".$rowText["sitterID"]."'" );

		$pets = (array) null;

		while ( $rowText2 = mysqli_fetch_array( $result2 ) ) {
			array_push( $pets, $rowText2[0] );
		}

		/* ----- Selecting sitters prefered service ----- */

		$result3 = mysqli_query( $con, "SELECT services.serviceType FROM sittersservicesconnection INNER JOIN services ON sittersservicesconnection.serviceID = services.serviceID WHERE sitterID = '".$rowText["sitterID"]."'" );

		$services = (array) null;

		while ( $rowText3 = mysqli_fetch_array( $result3 ) ) {
			array_push( $services, $rowText3[0] );
		}

		session_start();

		$_SESSION["signInSitterID"] = $rowText["sitterID"];
		$_SESSION["signInSitterFullName"] = $rowText["sitterFullName"];
		$_SESSION["signInSitterEmail"] = $rowText["sitterEmail"];
		$_SESSION["signInSitterLocation"] = $rowText["sitterLocation"];
		$_SESSION["signInSitterPreferedPets"] = $pets;
		$_SESSION["signInSitterPreferedServices"] = $services;
		$_SESSION["signInSitterPrice"] = $rowText["sitterPrice"];
		$_SESSION["signInSitterAbout"] = $rowText["sitterAbout"];
		$_SESSION["signInSitterImage"] = $rowText["sitterImage"];
		$_SESSION["signInSitterPassword"] = $rowText["sitterPassword"];
	}

	$con->close();
?>
