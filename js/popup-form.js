$( document ).on( 'click', '.js-popup-form', function( e ) {
	e.preventDefault();

	let sitterImage = $( this ).attr( 'data-sitterImage' );
	let sitterFullName = $( this ).attr( 'data-sitterFullName' );
	let sitterLocation = $( this ).attr( 'data-sitterLocation' );
	let sitterPreferedService = $( this ).attr( 'data-sitterPreferedService' );
	let sitterPrice = $( this ).attr( 'data-sitterPrice' );
	let sitterEmail = $( this ).attr( 'data-sitterEmail' );
	let sitterPreferedPet = $( this ).attr( 'data-sitterPreferedPet' );

	sitterPreferedPet = sitterPreferedPet.split( ', ' );
	sitterPreferedService = sitterPreferedService.split( ', ' );

	let sitterPreferedPetOptionInput, sitterPreferedServiceOptionInput = "";

	for( pet in sitterPreferedPet ) {
		sitterPreferedPetOptionInput += '<option value="' + sitterPreferedPet[pet] + '">';
	}

	for ( service in sitterPreferedService ) {
		sitterPreferedServiceOptionInput += '<option value="' + sitterPreferedService[service] + '">';
	}

	$.magnificPopup.open( {
		items: {
			src: '<div class="white-pop-up white-pop-up--bg-img theme-background-color">'+
			'<div class="white-pop-up__image" style="background-image: url(' + sitterImage + ');"></div>'+

			'<div class="position-relative">'+
				'<p class="text text--sm text--border text--white text--mb-xs">' + sitterLocation + '</p>'+

				'<h5 class="title title--md title--white title--mb-xs">' + sitterFullName + '</h5>'+
			'</div>'+

			'<div class="white-pop-up__main">'+
				'<div>'+
					'<p class="text text--md text--orange">$' + sitterPrice + '<span class="text text--md text--white"> /day</span></p>'+
				'</div>'+
			'</div>'+

			'<form class="form" onsubmit="return false">'+
				'<div class="form__item">'+
					'<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/>'+
					'</svg>'+

					'<input type="text" class="form__input js-popup-customerFullName theme-surface-color" placeholder="Full name" required />'+
				'</div>'+

				'<div class="form__item">'+
				'	<svg class="form__icon" fill="none" height="24" stroke="#808080" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>'+
				'</svg>'+

					'<input type="email" class="form__input js-popup-customerEmail theme-surface-color" placeholder="Email" required />'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><path class="form-icon-stroke" d="M30.217,35.252c0,0,4.049-2.318,5.109-2.875  c1.057-0.559,2.152-0.7,2.817-0.294c1.007,0.616,9.463,6.241,10.175,6.739c0.712,0.499,1.055,1.924,0.076,3.32  c-0.975,1.396-5.473,6.916-7.379,6.857c-1.909-0.062-9.846-0.236-24.813-15.207C1.238,18.826,1.061,10.887,1,8.978  C0.939,7.07,6.459,2.571,7.855,1.595c1.398-0.975,2.825-0.608,3.321,0.078c0.564,0.781,6.124,9.21,6.736,10.176  c0.419,0.66,0.265,1.761-0.294,2.819c-0.556,1.06-2.874,5.109-2.874,5.109s1.634,2.787,7.16,8.312  C27.431,33.615,30.217,35.252,30.217,35.252z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="4"/>'+
					'</svg>'+

					'<input type="number" class="form__input js-popup-customerContactNumber theme-surface-color" placeholder="Contact number" required />'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon" enable-background="new 0 0 64 64" height="64px" id="Layer_1" version="1.1" viewBox="0 0 64 64" width="64px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M61.489,10.88c-1.633-1.645-3.763-2.481-5.909-2.532c-0.024-0.002-0.034-0.008-0.06-0.012  c-1.562-0.168-1.911-1.926-1.911-1.926l-0.018,0.051c-0.303-1.446-0.976-2.83-2.096-3.959c-3.112-3.137-8.179-3.159-11.314-0.047  c-2.84,2.816-3.101,7.219-0.823,10.358L39.35,12.85c0,0,1.31,1.438-0.035,2.771L15.322,39.415c-1.186,1.177-2.213,0.036-2.213,0.036  L13.1,39.497c-3.132-2.6-7.766-2.481-10.718,0.447c-3.135,3.109-3.156,8.177-0.045,11.313c1.043,1.052,2.315,1.705,3.65,2.046  l-0.05,0.031c0,0,1.946,0.389,2.207,2.223c0,0.009,0.003,0.009,0.005,0.015c0.074,2.086,0.898,4.151,2.482,5.747  c3.345,3.375,8.788,3.396,12.161,0.048c2.647-2.62,3.182-6.519,1.69-9.711l0.05,0.021c0,0-1.319-2.487,0.438-4.232l23.065-22.875  c0,0,1.127-1.192,3.17-0.143c0.138,0.07,0.246,0.112,0.338,0.137c3.207,1.62,7.202,1.146,9.896-1.524  C64.812,19.696,64.834,14.251,61.489,10.88z M59.036,20.783c-1.954,1.939-4.991,2.07-7.119,0.446  c-0.036-0.021-0.065-0.03-0.104-0.054c-3.116-1.931-6.939,1.592-6.939,1.592L20.841,46.6c-3.379,3.354-0.87,5.492-0.87,5.492  c1.935,1.948,1.921,5.099-0.027,7.032c-1.951,1.931-5.099,1.918-7.033-0.03c-1.079-1.089-1.536-2.545-1.4-3.956l-0.009,0.006  c0,0,0.252-3.299-1.742-4.017c-0.214-0.087-0.373-0.143-0.373-0.143c-4.029-1.259-4.773-2.362-4.773-2.362  c-1.792-1.81-1.78-4.729,0.027-6.522c1.81-1.793,4.729-1.781,6.522,0.027c0.186,0.188,0.35,0.396,0.498,0.603l0.001-0.003  c0,0,0.009,0.012,0.012,0.021c0.04,0.059,0.07,0.119,0.106,0.178c0.441,0.692,2.119,2.879,4.567,0.452l25.83-25.62  c3.617-3.587,0.529-5.862,0.529-5.862l0.042-0.019c-0.121-0.1-0.256-0.167-0.367-0.279c-1.885-1.901-1.87-4.967,0.027-6.85  c1.897-1.882,4.968-1.87,6.849,0.029c0.898,0.904,1.345,2.069,1.376,3.247l0.015,0.024c0,0,0.589,3.467,4.113,3.463  c0.001,0.001,0.001,0.004,0.002,0.006c1.544-0.132,3.127,0.382,4.305,1.569C61.185,15.222,61.17,18.667,59.036,20.783z" fill="#808080" stroke-width="3px"/>'+
					'</svg>'+

					'<input type="text" class="form__input form__input--pl-sm js-popup-customerPet input-datalist theme-surface-color" list="form-input-pets" placeholder="Choose pet:" required>'+

					'<datalist id="form-input-pets">'+
						sitterPreferedPetOptionInput+
					'</datalist>'+

					'<svg class="form__icon form__icon--second" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>'+
					'</svg>'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon" enable-background="new 0 0 256 256" height="256px" id="Layer_1" version="1.1" viewBox="0 0 256 256" width="256px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M245.084,144.453c-69.337,0-84.631-6.877-102.186-20.579c25.653-33.066,80.75-107.192,81.321-107.961  c1.977-2.66,1.422-6.419-1.237-8.395c-2.66-1.979-6.418-1.423-8.395,1.236c-0.569,0.768-55.355,74.475-80.992,107.533  C105.859,91.332,98.463,31.924,98.39,31.313c-0.24-2.012-1.946-3.526-3.972-3.526h-6c-0.389,0-0.776,0.057-1.149,0.169  c-1.894,0.567-5.374,1.612-12.774,33.775c-7.007,0.948-23.641,5.134-32.064,23.561L9.699,97.368c-1.301,0.48-2.261,1.601-2.536,2.96  c-0.08,0.394-1.865,9.742,5.461,18.698c8.042,9.831,23.426,15.106,45.767,15.703c-0.289,4.525-0.51,12.236,0.25,21.965  c-0.704-1.488-2.284-2.157-2.284-2.157c-1.163-0.533-3.194-0.406-4.035,1.427c-0.912,1.989,0.323,3.858,0.516,4.577  c0.192,0.72-0.196,1.4-0.196,1.4l-3.051,6.65l-3.051,6.65c0,0-0.263,0.739-0.934,1.063c-0.67,0.323-2.892,0.605-3.805,2.595  c-0.841,1.834,0.388,3.456,1.55,3.989c0,0,2.741,1.36,4.682-0.594c0,0,0.085-0.101,0.205-0.046c0.121,0.056,0.1,0.186,0.1,0.186  c-0.214,2.744,2.604,3.937,2.604,3.937c1.162,0.531,3.193,0.406,4.034-1.428c0.912-1.99-0.322-3.858-0.515-4.578  c-0.192-0.719,0.196-1.4,0.196-1.4l3.05-6.65l2.139-4.664c0.139,0.975,0.287,1.96,0.447,2.958  c3.393,21.209,12.573,51.924,37.036,77.807c0.787,0.832,1.846,1.252,2.907,1.252c0.986,0,1.974-0.363,2.747-1.094  c1.605-1.518,1.677-4.049,0.159-5.654c-24.708-26.141-33.188-57.826-35.854-80.75c1.401,0.112,3.162,0.202,5.238,0.202  c13.913,0,41.652-4.038,65.385-32.233c18.929,14.858,34.818,22.314,107.172,22.314c2.209,0,4-1.791,4-4  S247.293,144.453,245.084,144.453z M66.321,150.007c-0.482-11.267,0.37-18.498,0.397-18.711c0.146-1.14-0.205-2.288-0.964-3.151  s-1.854-1.358-3.003-1.358c-27.451,0-38.971-6.888-43.801-12.665c-3.269-3.91-3.965-7.839-4.045-10.146l31.898-11.77  c1.049-0.388,1.888-1.196,2.314-2.229C57.29,70.125,76.989,69.47,77.809,69.453c1.85-0.027,3.439-1.319,3.845-3.124  c4.678-20.837,7.58-28.132,8.797-30.542h0.481c2.069,13.768,11.178,63.294,37.683,86.765  C102.293,153.679,70.953,150.655,66.321,150.007z" fill="#808080"/>'+
					'</svg>'+

					'<input type="text" class="form__input form__input--pl-sm js-popup-customerService input-datalist theme-surface-color" list="form-input-services" placeholder="Choose service:" required>'+

					'<datalist id="form-input-services">'+
						sitterPreferedServiceOptionInput+
					'</datalist>'+

					'<svg class="form__icon form__icon--second" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>'+
					'</svg>'+
				'</div>'+

				'<div class="form__item display-flex">'+
					'<input type="datetime-local" class="form__input form__input--md form__input--date js-popup-startDate theme-surface-color" min="2022-1-1" required />'+

					'<input type="datetime-local" class="form__input form__input--md form__input--date js-popup-endDate theme-surface-color" min="2022-1-1" required />'+
				'</div>'+

				'<div class="form__item">'+
					'<svg class="form__icon form__icon--lg form__icon--top form-icon-fill" enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="notes"><path d="M4,4v24h24V4H4z M26,26H6V6h20V26z M8,22h12v-2H8V22z M24,16H8v2h16V16z M24,12H8v2h16V12z"/></g>'+
					'</svg>'+

					'<textarea class="form__input form__input--textarea js-popup-customerNotes theme-surface-color" placeholder="Additional notes" rows="5"></textarea>'+
				'</div>'+

				'<input type="submit" value="Send" class="button button--xl button--filled button--mt-sm button--mr-ml-none js-form-submit" data-sitterEmail="' + sitterEmail + '">'+

				'<div class="form__footer js-form-footer">'+
					'<p class="text--success">The email has been sent succesfully!</p>'+
				'</div>'+
			'</form>'+
		'</div>',
		},
		type: 'inline',
		removalDelay: 300,
		mainClass: 'mfp-fade',
	} );
} );
