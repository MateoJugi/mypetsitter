<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT * FROM sitters LIMIT 0, 16" );

	while( $row = mysqli_fetch_array( $result ) ) {
		echo '<div class="image-galery__item js-image-popup" data-mfp-src="'.$row["sitterImage"].'" style="background-image: url( '.$row["sitterImage"].' );" title="'.$row["sitterAbout"].'"></div>';
	}

	$con->close();
?>
