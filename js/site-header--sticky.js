window.onscroll = function() {
	let prevScrollpos = window.scrollY;

	if ( prevScrollpos >= 345 ) {
		let currentScrollPos = window.scrollY;

		$( '.js-site-header-sticky-early-show' ).css( { 'opacity': '1', 'zIndex': '2' } );

		prevScrollpos = currentScrollPos;
	} else {
		$( '.js-site-header-sticky-early-show' ).css( { 'opacity': '0', 'zIndex': '0' } );
	}
	
	if ( prevScrollpos >= 975 ) {
		let currentScrollPos = window.scrollY;

		$( '.site-header--sticky' ).css( { 'opacity': '1', 'zIndex': '2' } );

		$( '.dark-theme-wrapper' ).css( { 'opacity': '1', 'zIndex': '1' } );

		prevScrollpos = currentScrollPos;
	} else {
		$( '.site-header--sticky' ).css( { 'opacity': '0', 'zIndex': '0' } );

		$( '.dark-theme-wrapper' ).css( { 'opacity': '0', 'zIndex': '-1' } );
	}
}