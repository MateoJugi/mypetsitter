<?php
	$customerFullName = $_GET['customerFullName'];
	$customerEmail = $_GET['customerEmail'];
	$customerContactNumber = $_GET['customerContactNumber']; 
	$customerPet = $_GET['customerPet'];
	$customerService = $_GET['customerService'];
	$startDate = $_GET['startDate'];
	$endDate = $_GET['endDate'];
	$customerNotes = $_GET['customerNotes'];
	$sitterEmail = $_GET['sitterEmail'];

	if ( !empty( $customerFullName ) && !empty( $customerEmail ) && !empty( $customerContactNumber ) && !empty( $customerPet ) && !empty( $customerService ) && !empty( $startDate ) && !empty( $endDate ) ) {
		$to = $sitterEmail;

		$subject = 'You have new potential customer';

		if ( !empty( $customerNotes ) ) {
			$message = '
				<html>
					<head>
						<title>Customer</title>
					</head>
		
					<body>
						<h3>Customer info</h3>
					
						<p><b>Customer name: </b>' .$customerFullName. '</p>
						<p><b>Customer email: </b>' .$customerEmail. '</p>
						<p><b>Customer contact number: </b>' .$customerContactNumber. '</p>
						<p><b>Customer pet: </b>' .$customerPet. '</p>
						<p><b>Customer service: </b>' .$customerService. '</p>
						<p><b>Start date: </b>' .$startDate. '</p>
						<p><b>End date: </b>' .$endDate. '</p>
						<p><b>Customer additional notes: </b>' .$customerNotes. '</p>
					</body>
				</html>
				';
		} else {
			$message = '
				<html>
					<head>
						<title>Customer</title>
					</head>

					<body>
						<h3>Customer info</h3>
					
						<p><b>Customer name: </b>' .$customerFullName. '</p>
						<p><b>Customer email: </b>' .$customerEmail. '</p>
						<p><b>Customer contact number: </b>' .$customerContactNumber. '</p>
						<p><b>Customer pet: </b>' .$customerPet. '</p>
						<p><b>Customer service: </b>' .$customerService. '</p>
						<p><b>Start date: </b>' .$startDate. '</p>
						<p><b>End date: </b>' .$endDate. '</p>
					</body>
				</html>
				';
		}

		$message = wordwrap( $message, 70 );

		$headers  = 'MIME-Version: 1.0' ."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
		$headers .= "From: mypetsitter@gmail.com\r\n" ."X-Mailer: php";

		mail( $to, $subject, $message, $headers );
	}
?>
