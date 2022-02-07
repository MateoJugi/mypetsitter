<?php
	include 'connection.php';

	$perPage = 2;

	$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

	$numberOfSitters = $result->fetch_array()[0] ?? '';

	$numberOfButtons = $numberOfSitters / $perPage;

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-before">. . .</a>';

	for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
		echo '<a href="#sitters" class="card-list-pagination__item js-card-list-pagination-item js-card-list-paginatin-item-active">'.$i.'</a>';
	}

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-after">. . .</a>';

	$con->close();
?>
