$( document ).on( 'click', '.js-popup-form', function( e ) {
	e.preventDefault();

	let sitterID = $( this ).attr( 'data-sitterID' );
	let sitterImage = $( this ).attr( 'data-sitterImage' );
	let sitterName = $( this ).attr( 'data-sitterName' );
	var sitterSurname = $( this ).attr( 'data-sitterSurname' );
	let sitterLocation = $( this ).attr( 'data-sitterLocation' );
	let sitterPreferedPet = $( this ).attr( 'data-sitterPreferedPet' );
	let sitterService = $( this ).attr( 'data-sitterService' );

	$.magnificPopup.open( {
		items: {
			src: '<div class="white-pop-up white-pop-up--bg-img">'+
			'<div class="white-pop-up__image" style="background-image: url(images/content/'+sitterImage+'.jpg);"></div>'+

			'<div class="position-relative">'+
				'<p class="text text--sm text--border text--white text--mb-xs">'+sitterLocation+'</p>'+

				'<h5 class="title title--md title--white title--mb-xs">'+sitterName+' '+sitterSurname+'</h5>'+
			'</div>'+

			'<div class="white-pop-up__main">'+
				'<div>'+
					'<p class="text text--sm text--white">'+sitterPreferedPet+'</p>'+
				'</div>'+

				'<div>'+
					'<p class="text text--sm text--white">'+sitterService+'</p>'+
				'</div>'+
			'</div>'+

			'<form class="form">'+
				'<div class="form__item">'+
					'<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/></svg>'+

					'<input type="text" class="form__input js-popup-customerName" id="ovaj" placeholder="Name" required>'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/></svg>'+

					'<input type="text" class="form__input js-popup-customerSurname" placeholder="Surname" required>'+
				'</div>'+

				'<div class="form__item">'+
				'	<svg class="form__icon" fill="none" height="24" stroke="#808080" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>'+

					'<input type="email" class="form__input js-popup-customerEmail" placeholder="Email" required>'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><path class="form-icon-stroke" d="M30.217,35.252c0,0,4.049-2.318,5.109-2.875  c1.057-0.559,2.152-0.7,2.817-0.294c1.007,0.616,9.463,6.241,10.175,6.739c0.712,0.499,1.055,1.924,0.076,3.32  c-0.975,1.396-5.473,6.916-7.379,6.857c-1.909-0.062-9.846-0.236-24.813-15.207C1.238,18.826,1.061,10.887,1,8.978  C0.939,7.07,6.459,2.571,7.855,1.595c1.398-0.975,2.825-0.608,3.321,0.078c0.564,0.781,6.124,9.21,6.736,10.176  c0.419,0.66,0.265,1.761-0.294,2.819c-0.556,1.06-2.874,5.109-2.874,5.109s1.634,2.787,7.16,8.312  C27.431,33.615,30.217,35.252,30.217,35.252z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="4"/></svg>'+

					'<input type="number" class="form__input js-popup-customerContactNumber" placeholder="Contact number" required>'+
				'</div>'+

				'<div class="form__item display-flex">'+
					'<input type="datetime-local" class="form__input form__input--md form__input--date js-popup-startDate" min="2022-1-1" required>'+

					'<input type="datetime-local" class="form__input form__input--md form__input--date js-popup-endDate" min="2022-1-1" required>'+
				'</div>'+

				'<input type="submit" class="button button--xl button--filled button--mt-sm button--mr-ml-none js-form-submit" data-sitterID="'+sitterID+'">'+
			'</form>'+
		'</div>',
		},
		type: 'inline',
		removalDelay: 300,
		mainClass: 'mfp-fade'
	} );
} );
