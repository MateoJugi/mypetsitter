$( '.js-site-header-menu' ).click( function( e ) {
	e.preventDefault();

	$( this ).toggleClass( 'open' );

	$( '.js-site-header__navigation--mobile' ).slideToggle();

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.js-blur' ).toggleClass( 'background-blur' );
} );

$( '.js-site-navigation-item-mobile' ).click( function () { 
	$( '.js-site-header__navigation--mobile' ).slideToggle( 'fast' );

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.js-blur' ).toggleClass( 'background-blur' );
} );
