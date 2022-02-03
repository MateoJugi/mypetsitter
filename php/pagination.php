<?php
	include 'connection.php';

	$perPage = 4;

	$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

	$numberOfSitters = $result->fetch_array()[0] ?? '';

	$numberOfButtons = $numberOfSitters / $perPage;

	for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
		echo '<a href="#sitters" class="card-list-pagination__item js-card-list-pagination-item">'.$i.'</a>';
	}

	$con->close();
?>
