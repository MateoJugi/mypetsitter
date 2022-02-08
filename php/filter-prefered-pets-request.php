<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT sitterPreferedPet FROM sitters" );

	$sitterPreferedPets = array();

	while( $row = mysqli_fetch_array( $result ) ) {
		array_push( $sitterPreferedPets, $row[0] );
	}

	$sitterPreferedPets = implode(', ', $sitterPreferedPets);

	$sitterPreferedPets = explode(', ', $sitterPreferedPets);

	$sitterPreferedPets = array_unique( $sitterPreferedPets );

	foreach ( $sitterPreferedPets as $index ) {
		print_r( '<option value="'.$index.'">'.$index.'</option>' );
	}
?>
