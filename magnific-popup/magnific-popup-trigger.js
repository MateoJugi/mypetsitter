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