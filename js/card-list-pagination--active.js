$( document ).on( 'click', '.js-card-list-pagination-item', function ( e ) {
	e.preventDefault();

	$( '.js-card-list-pagination-item ' ).removeClass( 'card-list-pagination__item--active' );
	
	$( this ).addClass( 'card-list-pagination__item--active' );
} );
