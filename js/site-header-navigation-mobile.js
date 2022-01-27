$( '.js-site-header-menu' ).click( function( e ) {
	e.preventDefault();

	$( '.js-site-header__navigation--mobile' ).slideToggle();

	$( 'body' ).toggleClass( 'overflow-hidden' );
} );

$( '.js-site-navigation-item-mobile' ).click( function () { 
	$( '.js-site-header__navigation--mobile' ).slideToggle();

	$( 'body' ).toggleClass( 'overflow-hidden' );
} );
