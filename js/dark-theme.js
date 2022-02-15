const hours = new Date().getHours();

if ( hours > 18 && hours < 24 || hours > 0 && hours < 5 ) {
	darktheme();
}

function darktheme() {
	$( '.dark-theme-trigger' ).toggleClass( 'dark-theme-trigger--active' );

	$( 'body' ).toggleClass( 'dark-theme-change' );

	if ( $( '.dark-theme-trigger' ).hasClass( 'dark-theme-trigger--active' ) ) {
		$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Light theme' );
	} else {
		$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Dark theme' );
	}
}

if ( $( '.dark-theme-trigger' ).hasClass( 'dark-theme-trigger--active' ) ) {
	$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Light theme' );
} else {
	$( '.dark-theme-wrapper' ).find( '.text' ).text( 'Dark theme' );
}

$( '.dark-theme-wrapper' ).click( darktheme );
