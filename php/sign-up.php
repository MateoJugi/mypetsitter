<?php
	if ( isset( $_POST[ 'signUpSubmit' ] ) ) {
		$con = mysqli_connect( 'localhost', 'root', '', 'myrental' );

		$insert = "INSERT INTO admins ( adminName, adminEmail, adminPassword ) VALUES ( '$_POST[adminNameSignUp]', '$_POST[adminEmailSignUp]', '$_POST[adminPasswordSignUp]' )";
	
		$result = mysqli_query( $con, $insert );

		$con->close();
	}
?>
