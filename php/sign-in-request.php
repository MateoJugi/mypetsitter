<?php
    session_start();
	include 'connection.php';

	$signInEmail = mysqli_real_escape_string( $con, $_GET["signInEmail"] );
	$signInPassword = mysqli_real_escape_string( $con, $_GET["signInPassword"] );

    /* Checking if admin is requesting sign in */

	$resultAdminPassword = mysqli_query( $con, "SELECT adminPassword FROM admins WHERE adminName = BINARY '" .$signInEmail. "'" );

	$adminPasswordHash = ( array ) null;

	while ( $rowAdminPassword = mysqli_fetch_array( $resultAdminPassword ) ) {
		array_push( $adminPasswordHash, $rowAdminPassword[0] );
	}

	$isAdminPasswordValid = password_verify( $signInPassword, $adminPasswordHash[0] );

    if ( $isAdminPasswordValid ) {
		echo "Admin";

        /* Activating admin sessions */

		$_SESSION["isAdmin"] = 1;
		$_SESSION["adminName"] = $signInEmail;

        exit();
    }

    /* Checking if sitter is requesting sign in */

    $resultSitterPassword = mysqli_query( $con, "SELECT sitterPassword FROM sitters WHERE sitterEmail = BINARY '" .$signInEmail. "'" );

    $sitterPasswordHash = ( array ) null;

    while ( $rowSitterPassword = mysqli_fetch_array( $resultSitterPassword ) ) {
        array_push( $sitterPasswordHash, $rowSitterPassword[0] );
    }

    $isSitterPasswordValid = password_verify( $signInPassword, $sitterPasswordHash[0] );

    if ( $isSitterPasswordValid ) {
		echo "Sitter";

		$resultAllFromSitter = mysqli_query( $con, "SELECT * FROM sitters WHERE sitterEmail = BINARY '" .$signInEmail. "' AND sitterPassword = BINARY '" .$sitterPasswordHash[0]. "'" );

		$rowAllFromSitter = mysqli_fetch_array( $resultAllFromSitter );

        /* ----- Selecting sitters prefered pets ----- */

        $resultSittersPets = mysqli_query( $con, "SELECT pets.petType FROM sitterspetsconnection INNER JOIN pets ON sitterspetsconnection.petID = pets.petID WHERE sitterID = '" .$rowAllFromSitter["sitterID"]. "'" );

        $pets = (array) null;

        while ( $rowSittersPets = mysqli_fetch_array( $resultSittersPets ) ) {
            array_push( $pets, $rowSittersPets[0] );
        }

        /* ----- Selecting sitters prefered service ----- */

        $resutlSittersServices = mysqli_query( $con, "SELECT services.serviceType FROM sittersservicesconnection INNER JOIN services ON sittersservicesconnection.serviceID = services.serviceID WHERE sitterID = '" .$rowAllFromSitter["sitterID"]. "'" );

        $services = (array) null;

        while ( $rowSittersServices = mysqli_fetch_array( $resutlSittersServices ) ) {
            array_push( $services, $rowSittersServices[0] );
        }

        /* Activating sitter sessions */

        $_SESSION["signInSitterID"] = $rowAllFromSitter["sitterID"];
        $_SESSION["signInSitterFullName"] = $rowAllFromSitter["sitterFullName"];
        $_SESSION["signInSitterEmail"] = $rowAllFromSitter["sitterEmail"];
        $_SESSION["signInSitterLocation"] = $rowAllFromSitter["sitterLocation"];
        $_SESSION["signInSitterPreferedPets"] = $pets;
        $_SESSION["signInSitterPreferedServices"] = $services;
        $_SESSION["signInSitterPrice"] = $rowAllFromSitter["sitterPrice"];
        $_SESSION["signInSitterAbout"] = $rowAllFromSitter["sitterAbout"];
        $_SESSION["signInSitterImage"] = $rowAllFromSitter["sitterImage"];
        $_SESSION["signInSitterPassword"] = $signInPassword;

        exit();
    }

    /* Checking if user is requesting sign in */

    $resultUserPassword = mysqli_query( $con, "SELECT userPassword FROM users WHERE userEmail = BINARY '" .$signInEmail. "'" );

	$userPasswordHash = ( array ) null;

	while ( $rowUserPassword = mysqli_fetch_array( $resultUserPassword ) ) {
		array_push( $userPasswordHash, $rowUserPassword[0] );
	}

	$isUserPasswordValid = password_verify( $signInPassword, $userPasswordHash[0] );

    if ( $isUserPasswordValid ) {
		echo "User";

        $resultAllFromUser = mysqli_query( $con, "SELECT * FROM users WHERE userEmail = BINARY '" .$signInEmail. "' AND userPassword = BINARY '" .$userPasswordHash[0]. "'" );

		$rowAllFromUser = mysqli_fetch_array( $resultAllFromUser );

        /* Activating user sessions */

		$_SESSION["isUser"] = 1;
        $_SESSION["userID"] = $rowAllFromUser["userID"];
		$_SESSION["userFullName"] = $rowAllFromUser["userFullName"];
        $_SESSION["userEmail"] = $rowAllFromUser["userEmail"];
        $_SESSION["userContactNumber"] = $rowAllFromUser["userContactNumber"];
        $_SESSION["userPassword"] = $signInPassword;

        exit();
    }

    $con -> close();

    echo 0;
?>