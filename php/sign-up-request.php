<?php
	include 'connection.php';

	$signUpFullName = mysqli_real_escape_string( $con, $_GET["signUpFullName"] );
	$signUpEmail = mysqli_real_escape_string( $con, $_GET["signUpEmail"] );
	$signUpLocation = mysqli_real_escape_string( $con, $_GET["signUpLocation"] );
	$signUpPreferedPet = mysqli_real_escape_string( $con, $_GET["signUpPreferedPet"] );
	$signUpPreferedService = mysqli_real_escape_string( $con, $_GET["signUpPreferedService"] );
	$signUpPrice = mysqli_real_escape_string( $con, $_GET["signUpPrice"] );
	$signUpImage = mysqli_real_escape_string( $con, $_GET["signUpImage"] );
	$signUpAbout = mysqli_real_escape_string( $con, $_GET["signUpAbout"] );
	$signUpPassword = mysqli_real_escape_string( $con, $_GET["signUpPassword"] );

	$signUpType = $_GET["signUpType"];
	$signUpContactNumber = mysqli_real_escape_string( $con, $_GET["signUpContactNumber"] );

	$signUpPreferedPetArray = explode( ',', $signUpPreferedPet );
	$signUpPreferedServiceArray = explode( ',', $signUpPreferedService );

	if ( $signUpType == 'as User' && !empty( $signUpFullName ) && !empty( $signUpEmail ) && !empty( $signUpContactNumber )&& !empty( $signUpPassword ) ) {

		$resultt = mysqli_query( $con, "INSERT INTO users (userFullName, userEmail, userContactNumber, userPassword) VALUES ( '" .$signUpFullName. "', '" .$signUpEmail. "', '" .$signUpContactNumber. "', '" .password_hash( $signUpPassword, PASSWORD_DEFAULT ). "' )" );
	} else {
		if ( !empty( $signUpFullName ) && !empty( $signUpEmail ) && !empty( $signUpLocation ) && !empty( $signUpPreferedPet ) && !empty( $signUpPreferedService ) && !empty( $signUpPrice ) && !empty( $signUpImage ) && !empty( $signUpAbout ) && !empty( $signUpPassword ) ) {

			$result = mysqli_query( $con, "INSERT INTO sitters (sitterFullName, sitterEmail, sitterLocation, sitterPrice, sitterImage, sitterPassword, sitterAbout) VALUES ( '" .$signUpFullName. "', '" .$signUpEmail. "', '" .$signUpLocation. "', '" .$signUpPrice. "', '" .$signUpImage. "', '" .password_hash( $signUpPassword, PASSWORD_DEFAULT ). "', '" .$signUpAbout. "' )");
	
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
					$result3 = mysqli_query( $con, "INSERT INTO pets (petType) VALUES ('" .$pet. "')" );
				}
			}
	
			/* -----Getting ID of last sitter----- */
	
			$result3 = mysqli_query( $con, "SELECT sitterID FROM sitters" );
	
			$lastSitterID = "";
	
			while( $row = mysqli_fetch_array( $result3 ) ) {
				( int ) $lastSitterID = $row[0];
			}
	
			/* -----Getting ID of entered pet----- */
	
			foreach ( $signUpPreferedPetArray as $pet ) {
				$result4 = mysqli_query( $con, "SELECT petID FROM pets WHERE petType = '" .$pet. "'" );
	
				$petID = mysqli_fetch_array( $result4 )[0];
	
				/* -----Inserting connection between sitter and pet----- */
	
				$result5 = mysqli_query( $con, "INSERT INTO sitterspetsconnection (sitterID, petID) VALUES ($lastSitterID, $petID)" );
			}
	
			/* -----Getting ID of entered service----- */
	
			foreach ( $signUpPreferedServiceArray as $service ) {
				$result6 = mysqli_query( $con, "SELECT serviceID FROM services WHERE serviceType = '" .$service. "'" );
	
				$serviceID = mysqli_fetch_array( $result6 )[0];
	
				/* -----Inserting connection between sitter and pet----- */
	
				$result7 = mysqli_query( $con, "INSERT INTO sittersservicesconnection (sitterID, serviceID) VALUES ($lastSitterID, $serviceID)" );
			}
	
			$con -> close();
		}
	}
?>
