<?php
	include 'connection.php';

	$signInEmail = mysqli_real_escape_string( $con, $_GET["signInEmail"] );
	$signInPassword = mysqli_real_escape_string( $con, $_GET["signInPassword"] );

	$resultPassword = mysqli_query( $con, "SELECT sitterPassword FROM sitters WHERE sitterEmail = BINARY '" .$signInEmail. "'" );

	$passwordHash = ( array ) null;

	while ( $rowPassword = mysqli_fetch_array( $resultPassword ) ) {
		array_push( $passwordHash, $rowPassword[0] );
	}

	$isPasswordValid = password_verify( $signInPassword, $passwordHash[0] );

	echo $isPasswordValid;

	if ( !$isPasswordValid == 0 ) {
		$result = mysqli_query( $con, "SELECT * FROM sitters WHERE sitterEmail = BINARY '" .$signInEmail. "' AND sitterPassword = BINARY '" .$passwordHash[0]. "'" );

		$row = mysqli_num_rows( $result );

		$rowText = mysqli_fetch_array( $result );

		if ( !$row == 0 ) {
			/* ----- Selecting sitters prefered pets ----- */

			$result2 = mysqli_query( $con, "SELECT pets.petType FROM sitterspetsconnection INNER JOIN pets ON sitterspetsconnection.petID = pets.petID WHERE sitterID = '" .$rowText["sitterID"]. "'" );

			$pets = (array) null;

			while ( $rowText2 = mysqli_fetch_array( $result2 ) ) {
				array_push( $pets, $rowText2[0] );
			}

			/* ----- Selecting sitters prefered service ----- */

			$result3 = mysqli_query( $con, "SELECT services.serviceType FROM sittersservicesconnection INNER JOIN services ON sittersservicesconnection.serviceID = services.serviceID WHERE sitterID = '" .$rowText["sitterID"]. "'" );

			$services = (array) null;

			while ( $rowText3 = mysqli_fetch_array( $result3 ) ) {
				array_push( $services, $rowText3[0] );
			}

			/* ini_set( 'session.save_path', DOCUMENT_ROOT .'/_SESSIONS/' ); */
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
			$_SESSION["signInSitterPassword"] = $signInPassword;
		}
	}

	$con -> close();
?>
