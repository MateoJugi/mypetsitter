<?php
	include 'connection.php';

	$signUpFullName = $_GET["signUpFullName"];

	$result = mysqli_query( $con, "SELECT sitterFullName FROM sitters WHERE sitterFullName = '" .$signUpFullName. "'");

	$row = mysqli_num_rows( $result );

	print_r( $row );
?>
