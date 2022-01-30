<?php
	include 'connection.php';

	$perPage = 4;

	$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

	$numberOfCars = $result->fetch_array()[0] ?? '';

	$numberOfButtons = $numberOfCars / $perPage;

	for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
		echo '<li class="card-list-pagination__item js-card-list-pagination-item">'.$i.'</li>';
	}

	$con->close();
?>
