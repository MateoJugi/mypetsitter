<?php
	include 'connection.php';
	include 'number-of-sitters-per-page.php';

	$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

	$numberOfSitters = $result->fetch_array()[0] ?? '';
	
	$numberOfButtons = $numberOfSitters / $sittersPerPage;

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--conditional js-card-list-pagination-item js-card-list-pagination-item-conditional-first">'.$numberOfSitters[0].'</a>';

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-before">. . .</a>';

	for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
		echo '<a href="#sitters" class="card-list-pagination__item js-card-list-pagination-item js-card-list-pagination-item-removable js-card-list-paginatin-item-active">'.$i.'</a>';
	}

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-after">. . .</a>';

	echo '<a href="#sitters" class="card-list-pagination__item card-list-pagination__item--conditional js-card-list-pagination-item js-card-list-pagination-item-conditional-last">'.ceil( $numberOfButtons ).'</a>';

	$con->close();
?>
