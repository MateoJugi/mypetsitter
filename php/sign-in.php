<?php
	if ( isset( $_POST[ 'signInSubmit' ] ) ) {
		$con = mysqli_connect( 'localhost', 'root', '', 'myrental' );
		
		$result = mysqli_query( $con, 'SELECT * FROM admins WHERE 1' );

		$con->close();
	}
?>
