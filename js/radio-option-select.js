$( '.js-sitter-sign-up-item' ).css( 'display', 'none' );

$( '.js-radio-option-select-item' ).click( function ( e ) { 
	e.preventDefault();
	
	$( '.js-radio-option-select-item' ).removeClass( 'radio-option-select__item--active' );

	$( this ).addClass( 'radio-option-select__item--active' );

	let optionText = $( this ).text();

	if ( ( optionText == 'as Sitter' ) ) {
		$( '.js-sitter-sign-up-item' ).slideDown();
		$( '.js-user-sign-up-item' ).slideUp();
	} else {
		$( '.js-sitter-sign-up-item' ).slideUp();
		$( '.js-user-sign-up-item' ).slideDown();
	}
} );