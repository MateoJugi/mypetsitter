$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );

			$( '.js-image-popup' ).magnificPopup( {
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-with-zoom',
				removalDelay: 300,
				image: {
					verticalFit: true
				}
			} );
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

		$( '.js-card-list-pagination-item-removable' ).slice( 3 ).css( 'display', 'none' );

		let pageNumber = $( '.card-list-pagination__item--active' ).html();

		let lastPage = $( '.js-card-list-pagination-item' ).last().html();

		let lastPageMinusTwo = lastPage - 2;

		if ( pageNumber < lastPageMinusTwo ) {
			$( '.js-pagination-dots-after' ).css( 'opacity', '1' );
		} else {
			$( '.js-pagination-dots-after' ).css( 'opacity', '0' );
		}

		/* ----- Adding last page after dots and pagination items ----- */

		if ( pageNumber < lastPageMinusTwo ) {
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'opacity', '1' );
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'pointer-events', 'all' );
		} else {
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'opacity', '0' );
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'pointer-events', 'none' );
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
			$( '.js-filter-location-request' ).append( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/filter-location-request.php', true );
	xmlhttp.send();
} );

/* ------------------------------------------------------------ */

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-filter-prefered-pets-request' ).append( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/filter-prefered-pets-request.php', true );
	xmlhttp.send();
} );

$( window ).ready( function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-filter-prefered-pets-request-select2' ).append( this.responseText );
		}
	};

	xmlhttp.open( 'GET', 'php/filter-prefered-pets-request-select2.php', true );
	xmlhttp.send();
} );

/* ------------------------------------------------------------ */

let pageNumberConditionForPageUp = 3;
let pageNumberConditionForPageDown = 1;

let a = 0;
let b = 3;
let c = 1;
let d = 4;

$( document ).on( 'click', '.js-card-list-pagination-item', function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );

			$( '.js-image-popup' ).magnificPopup( {
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-with-zoom',
				removalDelay: 300,
				image: {
					verticalFit: true
				}
			} );
		}
	};

	let pageNumber = $( this ).html();

	xmlhttp.open( 'GET', 'php/sitters-pagination-request.php?page=' + pageNumber, true );
	xmlhttp.send();

	$( '.js-filter-location' ).val( '' );
	$( '.js-filter-service' ).val( '' );
	$( '.js-filter-prefered-pets' ).val( '' );
	$( '.js-filter-price' ).val( '' )

	let lastPage = $( '.js-card-list-pagination-item' ).last().html();

	let lastPageMinusOne = parseInt( lastPage ) - 1;

	/* ----- Changing pagination depending on clicked one ----- */

	if ( lastPage > 3 ) {
		if ( pageNumber == 1 ) {
			$( '.js-card-list-pagination-item-removable' ).slice( 3 ).css( 'display', 'none' );
		} else if ( pageNumber == pageNumberConditionForPageUp ) {
			$( '.js-card-list-pagination-item-removable' ).slice( a, b ).css( 'display', 'none' );
			$( '.js-card-list-pagination-item-removable' ).slice( c, d ).css( 'display', 'inline-flex' );
	
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
	
			$( '.js-card-list-pagination-item-removable' ).slice( c, d ).css( 'display', 'none' );
			$( '.js-card-list-pagination-item-removable' ).slice( a, b ).css( 'display', 'inline-flex' );
	
			pageNumberConditionForPageUp--;
			pageNumberConditionForPageDown--;
		}
	} else {
		
	}

	/* ----- Adding dots before pagination items ----- */

	if ( lastPage > 3 ) {
		if ( pageNumber > 2 ) {
			$( '.js-pagination-dots-before' ).css( 'opacity', '1' );
		} else {
			$( '.js-pagination-dots-before' ).css( 'opacity', '0' );
		}
	
		/* ----- Adding dots after pagination items ----- */
	
		if ( pageNumber < lastPageMinusOne ) {
			$( '.js-pagination-dots-after' ).css( 'opacity', '1' );
		} else {
			$( '.js-pagination-dots-after' ).css( 'opacity', '0' );
		}
	
		/* ----- Adding first page before dots and pagination items ----- */
	
		if ( pageNumber > 2 ) {
			$( '.js-card-list-pagination-item-conditional-first' ).css( 'opacity', '1' );
			$( '.js-card-list-pagination-item-conditional-first' ).css( 'pointer-events', 'all' );
	
		} else {
			$( '.js-card-list-pagination-item-conditional-first' ).css( 'opacity', '0' );
			$( '.js-card-list-pagination-item-conditional-first' ).css( 'pointer-events', 'none' );
		}
	
		/* ----- Adding last page after dots and pagination items ----- */
	
		if ( pageNumber < lastPageMinusOne ) {
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'opacity', '1' );
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'pointer-events', 'all' );
		} else {
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'opacity', '0' );
			$( '.js-card-list-pagination-item-conditional-last' ).css( 'pointer-events', 'none' );
		}
	} else {
		
	}
} );

/* ----- Changing pagination if last page after dots is clicked ----- */

$( document ).on( 'click', '.js-card-list-pagination-item-conditional-last', function () {
	let lastPage = $( '.js-card-list-pagination-item' ).last().html();

	let lastPageMinusOne = parseInt( lastPage ) - 1;

	let lastPageMinusTwo = parseInt( lastPage ) - 2;

	$( '.js-card-list-pagination-item' ).css( 'display', 'none' );
	$( '.js-card-list-pagination-item' ).css( 'display', 'inline-flex' );

	$( '.js-card-list-pagination-item-removable' ).slice( 0, lastPageMinusTwo ).css( 'display', 'none' );

	$( '.js-card-list-pagination-item-removable' ).last().addClass( 'card-list-pagination__item--active' );

	pageNumberConditionForPageUp = parseInt( lastPage ) + 2;
	pageNumberConditionForPageDown = lastPageMinusOne;

	a = parseInt( lastPage ) - 2;
	b = parseInt( lastPage ) + 1;
	c = parseInt( lastPage ) - 1;
	d = parseInt( lastPage ) + 2;
} );

/* ----- Changing pagination if first page before dots is clicked ----- */

$( document ).on( 'click', '.js-card-list-pagination-item-conditional-first', function () {
	$( '.js-card-list-pagination-item' ).css( 'display', 'none' );
	$( '.js-card-list-pagination-item' ).css( 'display', 'inline-flex' );

	$( '.js-card-list-pagination-item-removable' ).slice( 3 ).css( 'display', 'none' );

	$( '.js-card-list-pagination-item-removable' ).first().addClass( 'card-list-pagination__item--active' );

	pageNumberConditionForPageUp = 3;
	pageNumberConditionForPageDown = 1;

	a = 0;
	b = 3;
	c = 1;
	d = 4;
} );

/* ------------------------------------------------------------ */

$( document ).on( 'click', '.js-filter-button', function ( e ) {
	e.preventDefault();

	$( '.js-card-list-pagination-item' ).removeClass( 'card-list-pagination__item--active' );

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			$( '.js-pull-request' ).html( this.responseText );

			$( '.js-image-popup' ).magnificPopup( {
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-with-zoom',
				removalDelay: 300,
				image: {
					verticalFit: true
				}
			} );
		}
	};

	let sitterLocation = $( '.js-filter-location' ).val();
	let sitterPreferedService = $( '.js-filter-service' ).val();
	let sitterPreferedPet = $( '.js-filter-prefered-pets' ).val();

	let sitterMinPrice = $( '.js-filter-price' ).find( ':selected' ).attr( 'min' );
	let sitterMaxPrice = $( '.js-filter-price' ).find( ':selected' ).attr( 'max' );

	xmlhttp.open( 'GET', 'php/sitters-filter-request.php?sitterLocation=' + sitterLocation + '&sitterPreferedService=' + sitterPreferedService + '&sitterPreferedPet=' + sitterPreferedPet + '&sitterMinPrice=' + sitterMinPrice + '&sitterMaxPrice=' + sitterMaxPrice, true );
	xmlhttp.send();

	/* ----- Refreshing pagination if filter is clicked ----- */

	let lastPage = $( '.js-card-list-pagination-item' ).last().html();

	pageNumberConditionForPageUp = 3;
	pageNumberConditionForPageDown = 1;

	a = 0;
	b = 3;
	c = 1;
	d = 4;

	$( '.js-pagination-dots-before' ).css( 'opacity', '0' );

	if ( lastPage > 3 ) {
		$( '.js-pagination-dots-after' ).css( 'opacity', '1' );
	}

	$( '.js-card-list-pagination-item-conditional-first' ).css( 'opacity', '0' );
	$( '.js-card-list-pagination-item-conditional-first' ).css( 'pointer-events', 'none' );

	if ( lastPage > 3 ) {
		$( '.js-card-list-pagination-item-conditional-last' ).css( 'opacity', '1' );
		$( '.js-card-list-pagination-item-conditional-last' ).css( 'pointer-events', 'all' );
	}

	$( '.js-card-list-pagination-item' ).css( 'display', 'none' );
	$( '.js-card-list-pagination-item' ).css( 'display', 'inline-flex' );

	$( '.js-card-list-pagination-item-removable' ).slice( 3 ).css( 'display', 'none' );
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
	let customerService =  $( '.js-popup-customerService' ).val();
	let startDate = $( '.js-popup-startDate' ).val();
	let endDate = $( '.js-popup-endDate' ).val();
	let customerNotes = $( '.js-popup-customerNotes' ).val();
	let sitterEmail = $( this ).attr( 'data-sitterEmail' );

	xmlhttp.open( 'GET', 'php/customer-sitter-email-contact.php?customerFullName=' + customerFullName + '&customerEmail=' + customerEmail + '&customerContactNumber=' + customerContactNumber + '&customerPet=' + customerPet + '&customerService=' + customerService + '&startDate=' + startDate + '&endDate=' + endDate + '&customerNotes=' + customerNotes + '&sitterEmail=' + sitterEmail, true );
	xmlhttp.send();

	if( customerFullName && customerEmail && customerEmail.includes( '@' ) && customerEmail.split( '@' ).pop() && customerContactNumber && customerPet && customerService && startDate && endDate ) {
		$( '.js-form-footer' ).slideDown();

		setTimeout( function() {
			window.location.reload();
		}, 3000 );
	}
} );

/* ----- Sitter sign up request ----- */

$( document ).on( 'click', '.js-sign-up-button', function () {
	var xmlhttp = new XMLHttpRequest();

	/* ----- Checking if entered fullname already exists ----- */

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			let duplicates = this.responseText;

			let signUpEmail = $( '.js-sign-up-email' ).val();

			if ( duplicates == 0 && signUpEmail ) {
				$( '.js-sign-up-fullname' ).removeClass( 'input--invalid' );

				/* ----- Checking if entered email already exists ----- */

				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function() {
					if ( this.readyState == 4 && this.status == 200 ) {
						let duplicates = this.responseText;

						if ( duplicates == 0 ) {
							$( '.js-sign-up-email' ).removeClass( 'input--invalid' );

							var xmlhttp = new XMLHttpRequest();

							let signUpFullName = $( '.js-sign-up-fullname' ).val();
							let signUpEmail = $( '.js-sign-up-email' ).val();
							let signUpLocation = $( '.js-sign-up-location' ).val();
							let signUpPreferedPet = $( '.js-sign-up-prefered-pet' ).val();
							let signUpPreferedService = $( '.js-sign-up-service' ).val();
							let signUpPrice = $( '.js-sign-up-price' ).val();
							let signUpImage = $( '.js-sign-up-image' ).val();
							let signUpAbout = $( '.js-sign-up-about' ).val();
							let signUpPassword = $( '.js-sign-up-password' ).val();

							/* ----- Checking if entered password contains all required characters ----- */

							let passwordValidation;

							if ( /[A-Z]/.test( signUpPassword ) && /[0-9]/.test( signUpPassword ) ) {
								passwordValidation = 1;

								$( '.js-sign-up-password' ).removeClass( 'input--invalid' );
							} else {
								passwordValidation = 0;

								$( '.js-sign-up-password' ).addClass( 'input--invalid' );
							}

							if ( signUpEmail && signUpEmail && signUpEmail.includes( '@' ) && signUpEmail.split( '@' ).pop() && signUpLocation && signUpPreferedPet && signUpPreferedService && signUpPrice && signUpImage && signUpPassword && passwordValidation == 1 && signUpAbout ) {
								xmlhttp.open( 'GET', 'php/sitter-sign-up-request.php?signUpFullName=' + signUpFullName + '&signUpEmail=' + signUpEmail + '&signUpLocation=' + signUpLocation + '&signUpPreferedPet=' + signUpPreferedPet + '&signUpPreferedService=' + signUpPreferedService + '&signUpPrice=' + signUpPrice + '&signUpImage=' + signUpImage + '&signUpAbout=' + signUpAbout + '&signUpPassword=' + signUpPassword, true );
								xmlhttp.send();

								$( '.js-form-footer' ).slideDown();

								setTimeout( function() {
									window.location.reload();
								}, 3000 );
							}
						} else {
							$( '.js-sign-up-email' ).addClass( 'input--invalid' );
						}
					}
				};

				let signUpEmail = $( '.js-sign-up-email' ).val();

				xmlhttp.open( 'GET', 'php/sign-up-email-duplicates.php?signUpEmail=' + signUpEmail, true );
				xmlhttp.send();
			} else if ( duplicates == 0 && !signUpEmail ) {
				$( '.js-sign-up-fullname' ).removeClass( 'input--invalid' );
			}
			 else {
				$( '.js-sign-up-fullname' ).addClass( 'input--invalid' );
			}
		}
	};

	let signUpFullName = $( '.js-sign-up-fullname' ).val();

	xmlhttp.open( 'GET', 'php/sign-up-fullname-duplicates.php?signUpFullName=' + signUpFullName, true );
	xmlhttp.send();
} );

$( '.js-sign-up-fullname, .js-sign-up-email' ).change( function () { 
	$( this ).removeClass( 'input--invalid' );
} );

/* ----- Sitter sign in request ----- */

$( document ).on( 'click', '.js-sign-in-button', function () {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if ( this.readyState == 4 && this.status == 200 ) {
			console.log(this.responseText);
			if ( this.responseText == 0 ) {
				console.log("nema");
			} else {
				console.log("ima");
			}
		}
	};

	let signInEmail = $( '.js-sign-in-email' ).val();
	let signInPassword = $( '.js-sign-in-password' ).val();

	xmlhttp.open( 'GET', 'php/sitters-sign-in-request.php?signInEmail=' + signInEmail + '&signInPassword=' + signInPassword, true );
	xmlhttp.send();
} );
