<?php
	include 'connection.php';

	$profileChangesFullName = mysqli_real_escape_string( $con, $_GET["profileChangesFullName"] );
	$profileChangesEmail = mysqli_real_escape_string( $con, $_GET["profileChangesEmail"] );
	$profileChangesLocation = mysqli_real_escape_string( $con, $_GET["profileChangesLocation"] );
	$profileChangesPreferedPet = mysqli_real_escape_string( $con, $_GET["profileChangesPreferedPet"] );
	$profileChangesPreferedService = mysqli_real_escape_string( $con, $_GET["profileChangesPreferedService"] );
	$profileChangesPrice = mysqli_real_escape_string( $con, $_GET["profileChangesPrice"] );
	$profileChangesImage = mysqli_real_escape_string( $con, $_GET["profileChangesImage"] );
	$profileChangesAbout = mysqli_real_escape_string( $con, $_GET["profileChangesAbout"] );
	$profileChangesPassword = mysqli_real_escape_string( $con, $_GET["profileChangesPassword"] );
	$profileChangesSitterID = mysqli_real_escape_string( $con, $_GET["profileChangesSitterID"] );

	$profileChangesPreferedPetArray = explode( ',', $profileChangesPreferedPet );
	$profileChangesPreferedServiceArray = explode( ',', $profileChangesPreferedService );

	if ( !empty( $profileChangesFullName ) && !empty( $profileChangesEmail ) && !empty( $profileChangesLocation ) && !empty( $profileChangesPreferedPet ) && !empty( $profileChangesPreferedService ) && !empty( $profileChangesPrice ) && !empty( $profileChangesImage ) && !empty( $profileChangesAbout ) && !empty( $profileChangesPassword ) ) {

		$result = mysqli_query( $con, "UPDATE sitters SET sitterFullName = '" .$profileChangesFullName. "', sitterEmail = '" .$profileChangesEmail. "', sitterLocation = '" .$profileChangesLocation. "', sitterPrice = '" .$profileChangesPrice. "', sitterImage = '" .$profileChangesImage. "', sitterPassword = '" .password_hash( $profileChangesPassword, PASSWORD_DEFAULT ). "', sitterAbout = '" .$profileChangesAbout. "' WHERE sitterID = '" .$profileChangesSitterID. "'" );

		$delete = mysqli_query( $con, "DELETE FROM sitterspetsconnection WHERE sitterID = $profileChangesSitterID" );

		$delete2 = mysqli_query( $con, "DELETE FROM sittersservicesconnection WHERE sitterID = $profileChangesSitterID" );

		/* -----Checking if entered pet exists in database----- */

		$result2 = mysqli_query( $con, "SELECT petType FROM pets" );

		$petList = array();

		while( $row = mysqli_fetch_array( $result2 ) ) {
			array_push( $petList, $row[0] );
		}

		$petList = array_unique( $petList );

		foreach ( $profileChangesPreferedPetArray as $pet ) {
			if ( in_array( $pet, $petList ) ) {
			} else {
				$result3 = mysqli_query( $con, "INSERT INTO pets (petType) VALUES ( '" .$pet. "' )" );
			}
		}

		/* -----Getting ID of entered pet----- */

		foreach ( $profileChangesPreferedPetArray as $pet ) {
			$result4 = mysqli_query( $con, "SELECT petID FROM pets WHERE petType = '" .$pet. "'" );

			$petID = mysqli_fetch_array( $result4 )[0];

			/* -----Inserting connection between sitter and pet----- */

			$result5 = mysqli_query( $con, "INSERT INTO sitterspetsconnection (sitterID, petID) VALUES ($profileChangesSitterID, $petID)" );
		}

		/* -----Getting ID of entered service----- */

		foreach ( $profileChangesPreferedServiceArray as $service ) {
			$result6 = mysqli_query( $con, "SELECT serviceID FROM services WHERE serviceType = '" .$service. "'" );

			$serviceID = mysqli_fetch_array( $result6 )[0];

			/* -----Inserting connection between sitter and pet----- */

			$result7 = mysqli_query( $con, "INSERT INTO sittersservicesconnection (sitterID, serviceID) VALUES ($profileChangesSitterID, $serviceID)" );
		}

		$con -> close();
	}
?>
