window.onscroll = function () {
	let prevScrollpos = window.scrollY;

	if ( prevScrollpos >= 975 ) {
		let currentScrollPos = window.scrollY;

		$( '.site-header--sticky' ).css( { 'opacity': '1', 'zIndex': '2' } );

		$( '.dark-theme-wrapper' ).css( { 'opacity': '1', 'zIndex': '1' } );

		prevScrollpos = currentScrollPos;
	}
	else {
		$( '.site-header--sticky' ).css( { 'opacity': '0', 'zIndex': '0' } );

		$( '.dark-theme-wrapper' ).css( { 'opacity': '0', 'zIndex': '-1' } );
	}
}
