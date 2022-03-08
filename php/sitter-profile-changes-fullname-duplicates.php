<?php
	include 'connection.php';

	$profileChangesFullName = $_GET["profileChangesFullName"];
	$sitterID = $_GET["sitterID"];

	$result = mysqli_query( $con, "SELECT sitterFullName FROM sitters WHERE sitterFullName = '" .$profileChangesFullName. "' AND sitterID != '" .$sitterID. "'");

	$row = mysqli_num_rows( $result );

	print_r( $row );
?>
