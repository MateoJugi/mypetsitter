$( '.form__icon--password-reveal' ).click( function() {
	let revealed = $( '.js-form-input-password' ).attr( 'type' );
	
	if ( revealed == 'text' ) {
		$( '.js-form-input-password' ).attr( 'type', 'password' );
	} else {
		$( '.js-form-input-password' ).attr( 'type', 'text' );
	}
} );