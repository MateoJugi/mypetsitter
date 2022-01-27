<?php
	include 'connection.php';

	$result = mysqli_query( $con, "INSERT INTO appointments (customerName, customerSurname, customerEmail, customerContactNumber, startDate, endDate, sitterID) VALUES ('$_GET[customerName]', '$_GET[customerSurname]', '$_GET[customerEmail]', '$_GET[customerContactNumber]', '$_GET[startDate]', '$_GET[endDate]', '$_GET[sitterID]')" );

	$con->close();

	/* $htmlContent = "
		<h2>Thank you for sending your rental request!</h2>
		<p><b>Name: </b>".$_GET[customerName].' '.$_GET[customerSurname];."</p>
		<p><b>Email: </b>".$_GET[customerEmail]."</p>
		<p><b>Pick Up Date: </b>".$_GET[startDate]."</p>
		<p><b>Return Date: </b>".$_GET[endDate]."</p>
	";

	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	$headers .= 'From myRental'; 

	@mail( $_GET[customerEmail], 'Thank you for sending your rental request', $htmlContent, $headers ); */
?>
