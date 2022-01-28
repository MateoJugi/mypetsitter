$( '.js-site-header-menu' ).click( function( e ) {
	e.preventDefault();

	$( '.js-site-header__navigation--mobile' ).slideToggle();

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.hero, .section' ).toggleClass( 'site-header--bg-blur' );
} );

$( '.js-site-navigation-item-mobile' ).click( function () { 
	$( '.js-site-header__navigation--mobile' ).slideToggle( 'fast' );

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.hero, .section' ).toggleClass( 'site-header--bg-blur' );
} );
