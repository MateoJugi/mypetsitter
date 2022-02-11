<?php
	include 'connection.php';

	$signUpFullName = $_GET["signUpFullName"];
	$signUpEmail = $_GET["signUpEmail"];
	$signUpLocation = $_GET["signUpLocation"];
	$signUpPreferedPet = $_GET["signUpPreferedPet"];
	$signUpService = $_GET["signUpService"];
	$signUpPrice = $_GET["signUpPrice"];
	$signUpImage = $_GET["signUpImage"];
	$signUpAbout = $_GET["signUpAbout"];
	$signUpPassword = $_GET["signUpPassword"];

	/* -----Inserting new sitter in database-----*/

	if ( !empty( $signUpFullName ) && !empty( $signUpEmail ) && !empty( $signUpLocation ) && !empty( $signUpPreferedPet ) && !empty( $signUpService ) && !empty( $signUpPrice ) && !empty( $signUpImage ) && !empty( $signUpAbout ) && !empty( $signUpPassword ) ) {
		$result = mysqli_query( $con, "INSERT INTO sitters (sitterFullName, sitterEmail, sitterLocation, sitterPrice, sitterImage, sitterPassword, sitterService, sitterAbout) VALUES ('".$signUpFullName."', '".$signUpEmail."', '".$signUpLocation."', '".$signUpPrice."', '".$signUpImage."', '".$signUpPassword."', '".$signUpService."', '".$signUpAbout."')");
		
		/* -----Checking if entered pet exists in database----- */

		$result2 = mysqli_query( $con, "SELECT petType FROM pets" );

		$petList = array();

		while( $row = mysqli_fetch_array( $result2 ) ) {
			array_push( $petList, $row[0] );
		}

		$petList = array_unique( $petList );

		if ( in_array( $signUpPreferedPet, $petList ) ) {
		} else {
			$result3 = mysqli_query( $con, "INSERT INTO pets (petType) VALUES ('".$signUpPreferedPet."')" );
		}

		/* -----Getting ID of last sitter----- */

		$result3 = mysqli_query( $con, "SELECT sitterID FROM sitters" );

		$lastSitterID = "";

		while( $row = mysqli_fetch_array( $result3 ) ) {
			(int) $lastSitterID = $row[0];
		}

		/* -----Getting ID of entered pet----- */

		$result4 = mysqli_query( $con, "SELECT petID FROM pets WHERE petType = '".$signUpPreferedPet."'" );

		$petID = mysqli_fetch_array( $result4 )[0];

		/* -----Inserting connection between sitter and pet----- */

		$result5 = mysqli_query( $con, "INSERT INTO sitterspreferedpets (sitterID, petID) VALUES ($lastSitterID, $petID)" );

		$con->close();
	}
?>
