$( '.js-select2' ).select2( {
	placeholder: function() {
		$( this ).data( 'placeholder' );
	}
} );

$( '.js-select2--tags' ).select2( {
	tags: true,
	placeholder: function() {
		$( this ).data( 'placeholder' );
	}
} );
