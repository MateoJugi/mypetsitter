$( document ).on( 'click', '.js-card-list-pagination-item', function () {
	$( '.js-card-list-pagination-item ' ).removeClass( 'card-list-pagination__item--active' );
	
	$( this ).addClass( 'card-list-pagination__item--active' );
} );
