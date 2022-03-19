$( '.js-site-header-menu' ).click( function( e ) {
	e.preventDefault();

	$( '.js-site-header-menu-first' ).toggle();

	$( '.site-header--sticky' ).toggleClass( 'site-header--sticky-open' );

	$( '.js-site-header-menu' ).toggleClass( 'site-header-menu-icon-open' );

	$( '.js-site-header__navigation--mobile' ).toggleClass( 'site-header__navigation--mobile-open' );

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.hero, .section, .footer' ).toggleClass( 'pointer-events-none' );
} );

$( '.js-site-navigation-item-mobile, .site-logo' ).click( function() {
	$( '.js-site-header-menu-first' ).toggle();

	$( '.site-header--sticky' ).toggleClass( 'site-header--sticky-open' );

	$( '.js-site-header-menu' ).toggleClass( 'site-header-menu-icon-open' );

	$( '.js-site-header__navigation--mobile' ).toggleClass( 'site-header__navigation--mobile-open' );

	$( 'body' ).toggleClass( 'overflow-hidden' );

	$( '.hero, .section, .footer' ).toggleClass( 'pointer-events-none' );
} );
