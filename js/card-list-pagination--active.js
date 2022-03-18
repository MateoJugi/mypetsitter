$( document ).on( 'click', '.js-card-list-pagination-item', function( e ) {
	e.preventDefault();

	let clickedPageNumber = $( this ).html();

	$( '.js-card-list-pagination-item ' ).removeClass( 'card-list-pagination__item--active' );

	$( '.js-card-list-pagination-item ' ).each( function() { 
		if ( $( this ).html() == clickedPageNumber ) {
			$( this ).addClass( 'card-list-pagination__item--active' );
		}
	} );
} );
