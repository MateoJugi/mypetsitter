$( window ).ready( function () {
	$.getJSON( './json-data/croatian-cities.json', function( data ) {
		for ( city in data ) {
			$( '.js-form-input-location' ).append( '<option value="' + data[city].city + '">' );
		}
	} );
} );
