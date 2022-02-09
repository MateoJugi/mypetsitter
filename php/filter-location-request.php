<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT sitterLocation FROM sitters" );

	$sitterLocations = array();

	while( $row = mysqli_fetch_array( $result ) ) {
		array_push( $sitterLocations, $row[0] );
	}

	$sitterLocations = array_unique( $sitterLocations );

	foreach ( $sitterLocations as $index ) {
		print_r( '<option value="'.$index.'">' );
	}
?>
