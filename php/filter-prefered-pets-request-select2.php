<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT * FROM pets" );

	while( $row = mysqli_fetch_array( $result ) ) {
		echo '<option value="'.$row["petType"].'">'.$row["petType"].'</option>';
	}
?>
