$( '.js-tooltip-trigger' ).click( function ( e ) { 
	e.preventDefault();

	$( '.text--tooltip' ).slideToggle();
} );
