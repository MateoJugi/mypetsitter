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

/* ------------------------------------------------------------ */

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

/* ------------------------------------------------------------ */

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pagination-buttons' ).html( this.responseText );
		}

		$( '.js-card-list-paginatin-item-active' ).first().addClass( 'card-list-pagination__item--active' );

		$('.js-card-list-pagination-item').slice( 3 ).css( 'display', 'none' );

		let pageNumberr = $( '.card-list-pagination__item--active' ).html();

		if ( pageNumberr < 5 ) {
			$( '.js-pagination-dots-after' ).css( 'display', 'inline-flex' );
		} else {
			$( '.js-pagination-dots-after' ).css( 'display', 'none' );
		}
	};

	xmlhttp.open( 'GET', 'php/pagination.php', true );
	xmlhttp.send();
} );

/* ------------------------------------------------------------ */

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-filter-location' ).append( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/filter-location-request.php', true );
	xmlhttp.send();
} );

/* ------------------------------------------------------------ */

let pageNumberConditionForPageUp = 3;
let pageNumberConditionForPageDown = 1;

let a = 0;
let b = 3;
let c = 1;
let d = 4;

$( document ).on( 'click', '.js-card-list-pagination-item', function ( lastPage ) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	var pageNumber = $( this ).html();

	xmlhttp.open( 'GET', 'php/sitters-pagination-request.php?page=' + pageNumber, true );
	xmlhttp.send();

	$( '.js-filter-location' ).val( '' );
	$( '.js-filter-service' ).val( '' );
	$( '.js-filter-price' ).val( '' )

	if ( pageNumber == 1 ) {
		$('.js-card-list-pagination-item').slice( 3 ).css( 'display', 'none' );
	} else if ( pageNumber == pageNumberConditionForPageUp ) {
		$('.js-card-list-pagination-item').slice( a, b ).css( 'display', 'none' );
		$('.js-card-list-pagination-item').slice( c, d ).css( 'display', 'inline-flex' );

		a++;
		b++;
		c++;
		d++;

		pageNumberConditionForPageUp++;
		pageNumberConditionForPageDown++;
	} else if ( pageNumber == pageNumberConditionForPageDown ) {
		a--;
		b--;
		c--;
		d--;

		$('.js-card-list-pagination-item').slice( c, d ).css( 'display', 'none' );
		$('.js-card-list-pagination-item').slice( a, b ).css( 'display', 'inline-flex' );

		pageNumberConditionForPageUp--;
		pageNumberConditionForPageDown--;
	}

	if ( pageNumber > 2 ) {
		$( '.js-pagination-dots-before' ).css( 'display', 'inline-flex' );
	} else {
		$( '.js-pagination-dots-before' ).css( 'display', 'none' );
	}

	if ( pageNumber < 5 ) {
		$( '.js-pagination-dots-after' ).css( 'display', 'inline-flex' );
	} else {
		$( '.js-pagination-dots-after' ).css( 'display', 'none' );
	}
} );

/* ------------------------------------------------------------ */

$( document ).on( 'click', '.js-filter-button', function ( e ) {
	e.preventDefault();

	$( '.js-card-list-pagination-item' ).removeClass( 'card-list-pagination__item--active' );

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	let sitterLocation = $( '.js-filter-location' ).find( ':selected' ).attr( 'value' );
	let sitterService = $( '.js-filter-service' ).find( ':selected' ).attr( 'value' );
	let sitterMinPrice = $( '.js-filter-price' ).find( ':selected' ).attr( 'min' );
	let sitterMaxPrice = $( '.js-filter-price' ).find( ':selected' ).attr( 'max' );

	xmlhttp.open( 'GET', 'php/sitters-filter-request.php?sitterLocation=' + sitterLocation + '&sitterService=' + sitterService + '&sitterMinPrice=' + sitterMinPrice + '&sitterMaxPrice=' + sitterMaxPrice, true );
	xmlhttp.send();
} );

/* ------------------------------------------------------------ */

$( document ).on( 'click', '.js-form-submit', function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
		}
	};

	let customerFullName = $( '.js-popup-customerFullName' ).val();
	let customerEmail = $( '.js-popup-customerEmail' ).val();
	let customerContactNumber = $( '.js-popup-customerContactNumber' ).val();
	let customerPet = $( '.js-popup-customerPet' ).val();
	let startDate = $( '.js-popup-startDate' ).val();
	let endDate = $( '.js-popup-endDate' ).val();
	let customerNotes = $( '.js-popup-customerNotes' ).val();
	let sitterEmail = $( this ).attr( 'data-sitterEmail' );

	xmlhttp.open( 'GET', 'php/customer-sitter-email-contact.php?customerFullName=' + customerFullName + '&customerEmail=' + customerEmail + '&customerContactNumber=' + customerContactNumber + '&customerPet=' + customerPet + '&startDate=' + startDate + '&endDate=' + endDate + '&customerNotes=' + customerNotes + '&sitterEmail=' + sitterEmail, true );
	xmlhttp.send();

	if( customerFullName && customerEmail && customerEmail.includes( '@' ) && customerEmail.split( '@' ).pop() && customerContactNumber && customerPet && startDate && endDate ) {
		$( '.js-form-footer' ).slideDown();
	}
} );
