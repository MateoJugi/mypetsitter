<?php
	include 'connection.php';

	$signUpFullName = mysqli_real_escape_string( $con, $_GET["signUpFullName"] );
	$signUpEmail = mysqli_real_escape_string( $con, $_GET["signUpEmail"] );
	$signUpLocation = mysqli_real_escape_string( $con, $_GET["signUpLocation"] );
	$signUpPreferedPet = mysqli_real_escape_string( $con, $_GET["signUpPreferedPet"] );
	$signUpService = mysqli_real_escape_string( $con, $_GET["signUpService"] );
	$signUpPrice = mysqli_real_escape_string( $con, $_GET["signUpPrice"] );
	$signUpImage = mysqli_real_escape_string( $con, $_GET["signUpImage"] );
	$signUpAbout = mysqli_real_escape_string( $con, $_GET["signUpAbout"] );
	$signUpPassword = mysqli_real_escape_string( $con, $_GET["signUpPassword"] );

	$signUpPreferedPetArray = explode( ',', $signUpPreferedPet );

	print_r ($signUpPreferedPetArray);

	if ( !empty( $signUpFullName ) && !empty( $signUpEmail ) && !empty( $signUpLocation ) && !empty( $signUpPreferedPet ) && !empty( $signUpService ) && !empty( $signUpPrice ) && !empty( $signUpImage ) && !empty( $signUpAbout ) && !empty( $signUpPassword ) ) {

		$result = mysqli_query( $con, "INSERT INTO sitters (sitterFullName, sitterEmail, sitterLocation, sitterPrice, sitterImage, sitterPassword, sitterService, sitterAbout) VALUES ('".$signUpFullName."', '".$signUpEmail."', '".$signUpLocation."', '".$signUpPrice."', '".$signUpImage."', '".$signUpPassword."', '".$signUpService."', '".$signUpAbout."')");
		
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

			$result5 = mysqli_query( $con, "INSERT INTO sitterspetsandservices (sitterID, petID) VALUES ($lastSitterID, $petID)" );
		}

		$con->close();
	}
?>
