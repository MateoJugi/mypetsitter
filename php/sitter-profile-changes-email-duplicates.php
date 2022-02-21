<?php
	include 'connection.php';

	$profileChangesEmail = $_GET["profileChangesEmail"];
	$sitterID = $_GET["sitterID"];

	$result = mysqli_query( $con, "SELECT sitterID, sitterEmail FROM sitters WHERE sitterEmail = '".$profileChangesEmail."' AND sitterID != '".$sitterID."'");

	$row = mysqli_num_rows( $result );

	print_r( $row );
?>
