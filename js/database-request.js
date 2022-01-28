window.onload = function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	xmlhttp.open( "GET", "php/sitters-pull-request.php", true );
	xmlhttp.send();
}

$( '.js-card-list-pagination-item' ).click( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );
		}
	};

	var pageNumber = $( this ).html();

	xmlhttp.open( "GET", "php/sitters-pagination-request.php?page="+pageNumber, true );
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

	xmlhttp.open( "GET", "php/sitters-filter-request.php?sitterLocation="+sitterLocation+"&sitterService="+sitterService, true );
	xmlhttp.send();
} );

/* $( document ).on( 'click', '.js-form-submit', function () {
	var xmlhttp = new XMLHttpRequest();

	let sitterID = $( this ).attr( 'data-sitterID' );
	let customerFullName = $( '.js-popup-customerFullName' ).val();
	let customerEmail = $( '.js-popup-customerEmail' ).val();
	let customerContactNumber = $( '.js-popup-customerContactNumber' ).val();
	let customerPet = $( '.js-popup-customerPet ).val();
	let startDate = $( '.js-popup-startDate' ).val();
	let endDate = $( '.js-popup-endDate' ).val();
	let customerNotes = $( '.js-popup-customerNotes' ).val();

	if ( customerFullName && customerEmail && customerContactNumber && customerPet && startDate && endDate && customerNotes && sitterID ) {
		xmlhttp.open( "GET", "php/email.php?sitterID="+sitterID+"&customerFullName="+customerFullName+"&customerEmail="+customerEmail+"&customerContactNumber="+customerContactNumber+"&customerPet="+customerPet+"&startDate="+startDate+"&endDate="+endDate+"&customerNotes="+customerNotes, true );
		xmlhttp.send();
	} else {
	}
} ); */
/* 
$( document ).on( 'click', '.button', function ( e ) {
	e.preventDefault();
} ); */

