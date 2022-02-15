<?php
	include 'connection.php';

	$signUpFullName = $_GET["signUpFullName"];
	$signUpEmail = $_GET["signUpEmail"];
	$signUpLocation = $_GET["signUpLocation"];
	$signUpPreferedPet = $_GET["signUpPreferedPet"];
	$signUpPreferedService = $_GET["signUpPreferedService"];
	$signUpPrice = $_GET["signUpPrice"];
	$signUpImage = $_GET["signUpImage"];
	$signUpAbout = $_GET["signUpAbout"];
	$signUpPassword = $_GET["signUpPassword"];

	$signUpPreferedPetArray = explode( ',', $signUpPreferedPet );
	$signUpPreferedServiceArray = explode( ',', $signUpPreferedService );

	if ( !empty( $signUpFullName ) && !empty( $signUpEmail ) && !empty( $signUpLocation ) && !empty( $signUpPreferedPet ) && !empty( $signUpPreferedService ) && !empty( $signUpPrice ) && !empty( $signUpImage ) && !empty( $signUpAbout ) && !empty( $signUpPassword ) ) {

		$result = mysqli_query( $con, "INSERT INTO sitters (sitterFullName, sitterEmail, sitterLocation, sitterPrice, sitterImage, sitterPassword, sitterAbout) VALUES ('".$signUpFullName."', '".$signUpEmail."', '".$signUpLocation."', '".$signUpPrice."', '".$signUpImage."', '".$signUpPassword."', '".$signUpAbout."')");
		
		/* -----Checking if entered pet exists in database----- */

		$result2 = mysqli_query( $con, "SELECT petType FROM pets" );

		$petList = array();

		while( $row = mysqli_fetch_array( $result2 ) ) {
			array_push( $petList, $row[0] );
		}

		$petList = array_unique( $petList );

		foreach ( $signUpPreferedPetArray as $pet ) {
			if ( in_array( $pet, $petList ) ) {
			} else {
				$result3 = mysqli_query( $con, "INSERT INTO pets (petType) VALUES ('".$pet."')" );
			}
		}

		/* -----Getting ID of last sitter----- */

		$result3 = mysqli_query( $con, "SELECT sitterID FROM sitters" );

		$lastSitterID = "";

		while( $row = mysqli_fetch_array( $result3 ) ) {
			(int) $lastSitterID = $row[0];
		}

		/* -----Getting ID of entered pet----- */

		foreach ( $signUpPreferedPetArray as $pet ) {
			$result4 = mysqli_query( $con, "SELECT petID FROM pets WHERE petType = '".$pet."'" );

			$petID = mysqli_fetch_array( $result4 )[0];

			/* -----Inserting connection between sitter and pet----- */

			$result5 = mysqli_query( $con, "INSERT INTO sitterspetsconnection (sitterID, petID) VALUES ($lastSitterID, $petID)" );
		}

		foreach ( $signUpPreferedServiceArray as $service ) {
			$result6 = mysqli_query( $con, "SELECT serviceID FROM services WHERE serviceType = '".$service."'" );

			$serviceID = mysqli_fetch_array( $result6 )[0];

			/* -----Inserting connection between sitter and pet----- */

			$result7 = mysqli_query( $con, "INSERT INTO sittersservicesconnection (sitterID, serviceID) VALUES ($lastSitterID, $serviceID)" );
		}

		$con->close();
	}
?>
