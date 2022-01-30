window.onscroll = function () {
	let prevScrollpos = window.scrollY;

	if ( prevScrollpos >= 875 ) {
		let currentScrollPos = window.scrollY;

		document.getElementsByClassName( 'site-header--sticky' )[0].style.zIndex = '2'

		document.getElementsByClassName( 'site-header--sticky' )[0].style.opacity = '1';

		prevScrollpos = currentScrollPos;
	}
	else {
		document.getElementsByClassName( 'site-header--sticky' )[0].style.zIndex = '0'

		document.getElementsByClassName( 'site-header--sticky' )[0].style.opacity = '0';
	}
}
