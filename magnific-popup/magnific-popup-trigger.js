$( '.js-pop-up' ).magnificPopup( {
	type:'inline',
	midClick: true,
	removalDelay: 300,
	mainClass: 'mfp-fade',
	callbacks: {
        close: function(){
            $( '.js-form-input-password' ).attr( 'type', 'password' );
      }
	}
} );

/* ----- Close opened popup ----- */

$( document ).on( 'click', '.js-popup-close-button', function( e ) {
	e.preventDefault();

	$.magnificPopup.close();
} );