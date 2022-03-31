$( document ).on( 'click', '.js-card-list-item-comments-button', function( e ) {
	e.preventDefault();
	
	$.magnificPopup.open( {
		items: {
			src: '<div class="white-pop-up white-pop-up--bg-img theme-background-color">'+
			'<p>sss</p>'+
		'</div>',
		},
		type: 'inline',
		removalDelay: 300,
		mainClass: 'mfp-fade',
	} );
} );