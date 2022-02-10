<?php
	include 'connection.php';

	$signUpEmail = $_GET["signUpEmail"];

	$result = mysqli_query( $con, "SELECT sitterEmail FROM sitters WHERE sitterEmail = '".$signUpEmail."'");

	$row = mysqli_num_rows( $result );

	print_r( $row );
?>
