$( document ).on( 'click', '.js-card-list-item-comments-button', function( e ) {
	e.preventDefault();
	
	let isUserLogedIn = sessionStorage.getItem( 'isUserLogedIn' );

	if ( isUserLogedIn == 'yes' ) {
		$.magnificPopup.open( {
			items: {
				src: '<div class="white-pop-up white-pop-up--no-before theme-background-color">'+
				'<p class="text text--md text--black theme-on-surface-color">yes</p>'+
			'</div>',
			},
			type: 'inline',
			removalDelay: 300,
			mainClass: 'mfp-fade',
		} );
	} else {
		$.magnificPopup.open( {
			items: {
				src: '<div class="white-pop-up white-pop-up--no-before theme-background-color">'+
				'<p class="text text--md text--black theme-on-surface-color">You need to be signed in to leave a review.</p>'+
			'</div>',
			},
			type: 'inline',
			removalDelay: 300,
			mainClass: 'mfp-fade',
		} );
	}
} );