<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT * FROM sitters LIMIT 0, 16" );

	while( $row = mysqli_fetch_array( $result ) ) {
		echo '<div class="image-galery__item js-image-popup" data-mfp-src="images/content/'.$row["sitterImage"].'.jpg" style="background-image: url( images/content/'.$row["sitterImage"].'.jpg );" title="Caption. Can be aligned to any side and contain any HTML."></div>';
	}

	$con->close();
?>
