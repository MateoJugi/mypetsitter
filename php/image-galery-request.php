<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT * FROM sitters LIMIT 0, 16" );

	while( $row = mysqli_fetch_array( $result ) ) {
		echo '<div class="image-galery__item" style="background-image: url( images/content/'.$row["sitterImage"].'.jpg );"></div>';
	}

	$con->close();
?>
