$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/sitters-pull-request.php', true );
	xmlhttp.send();
} );

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-image-galery' ).html( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/image-galery-request.php', true );
	xmlhttp.send();
} );

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pagination-buttons' ).html( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/pagination.php', true );
	xmlhttp.send();
} );

$( '.js-card-list-pagination-item' ).click( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	var pageNumber = $( this ).html();

	xmlhttp.open( 'GET', 'php/sitters-pagination-request.php?page=' + pageNumber, true );
	xmlhttp.send();
} );

$( '.js-filter-button' ).click( function ( e ) {
	e.preventDefault();

	$( '.js-card-list-pagination-item ' ).removeClass( 'card-list-pagination__item--active' );

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	let sitterLocation = $( '.js-filter-location' ).find( ':selected' ).attr( 'value' );
	let sitterService = $( '.js-filter-service' ).find( ':selected' ).attr( 'value' );

	xmlhttp.open( 'GET', 'php/sitters-filter-request.php?sitterLocation=' + sitterLocation + '&sitterService=' + sitterService, true );
	xmlhttp.send();
} );
