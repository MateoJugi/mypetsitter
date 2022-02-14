const hours = new Date().getHours();

if ( hours > 18 && hours < 24 || hours > 0 && hours < 5 ) {
	darktheme();
}

function darktheme() {
	$( '.dark-theme' ).toggleClass( 'dark-theme--active' );

	if ( $( '.dark-theme' ).hasClass( 'dark-theme--active' ) ) {
		$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Light theme' );
	} else {
		$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Dark theme' );
	}

	$( '.js-background-color' ).toggleClass( 'background-color' );
	$( '.js-surface-color' ).toggleClass( 'surface-color' );

	$( '.js-on-surface-color' ).toggleClass( 'on-surface-color' );
	$( '.js-surface-fill' ).toggleClass( 'surface-fill' );
}

$( '.dark-theme-wrapper' ).click( darktheme );
