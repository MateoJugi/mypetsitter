$( '.js-tooltip-trigger' ).click( function ( e ) {
	e.preventDefault();

	$( this ).next( '.text--tooltip' ).slideToggle();
} );
