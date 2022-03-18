<?php
	include 'connection.php';
	include 'number-of-sitters-per-page.php';
	include 'number-of-sitters-per-admin-page.php';

	$windowLocation = $_GET["windowLocation"];

	$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

	$numberOfSitters = $result -> fetch_array()[0] ?? '';

	if ( strpos( $windowLocation, "admin.php" ) ) {
		$numberOfButtons = $numberOfSitters / $sittersPerAdminPage;
	} else {
		$numberOfButtons = $numberOfSitters / $sittersPerPage;
	}

	echo '<a href="#" class="card-list-pagination__item card-list-pagination__item--conditional js-card-list-pagination-item js-card-list-pagination-item-conditional-first">' .$numberOfSitters[0]. '</a>';

	echo '<a href="#" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-before">. . .</a>';

	for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
		echo '<a href="#" class="card-list-pagination__item js-card-list-pagination-item js-card-list-pagination-item-removable js-card-list-paginatin-item-active">' .$i. '</a>';
	}

	echo '<a href="#" class="card-list-pagination__item card-list-pagination__item--border-none js-pagination-dots-after">. . .</a>';

	echo '<a href="#" class="card-list-pagination__item card-list-pagination__item--conditional js-card-list-pagination-item js-card-list-pagination-item-conditional-last">' .ceil( $numberOfButtons ). '</a>';

	$con -> close();
?>
