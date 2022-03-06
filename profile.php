<?php
	session_start();

	$signInSitterID = $_SESSION['signInSitterID'];
	$signInSitterFullName = $_SESSION['signInSitterFullName'];
	$signInSitterEmail = $_SESSION['signInSitterEmail'];
	$signInSitterLocation = $_SESSION['signInSitterLocation'];
	$signInSitterPreferedPets = $_SESSION["signInSitterPreferedPets"];
	$signInSitterPreferedServices = $_SESSION["signInSitterPreferedServices"];
	$signInSitterPrice = $_SESSION['signInSitterPrice'];
	$signInSitterAbout= $_SESSION['signInSitterAbout'];
	$signInSitterImage= $_SESSION['signInSitterImage'];
	$signInSitterPassword = $_SESSION['signInSitterPassword'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>myPetSitter - Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="images/icons/favicon.ico">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<div class="site-header site-header--color-black js-site-header theme-surface-color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="site-header__inner">
							<div class="site-logo theme-on-surface-color js-profile-sign-out-button">
								<a href="#">myPetSitter</a>
							</div>

							<div>
								<h5 class="title title--md theme-on-surface-color js-site-header-profile-sitter-name">
									<?php
										echo $signInSitterFullName;
									?>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section--text-align-left section--pt-pb-sm theme-background-color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="white-pop-up white-pop-up--title-lg white-pop-up--orange-before theme-surface-color">
							<form class="form" enctype="multipart/form-data" onsubmit="return false">
								<h3 class="title title--lg title--white title--mb-xl theme-on-surface-color">Change your<br> information</h3>
			
								<div class="form__item">
									<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/>
									</svg>
				
									<input type="text" class="form__input form__input--orange js-sitter-profile-changes-fullname theme-surface-color" placeholder="Full name" required value="<?php echo $signInSitterFullName?>"/>
								</div>
				
								<div class="form__item">
									<svg class="form__icon form-icon-stroke" fill="none" height="24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
									</svg>
				
									<input type="email" class="form__input form__input--orange js-sitter-profile-changes-email theme-surface-color" placeholder="Email" required value="<?php echo $signInSitterEmail?>"/>
								</div>

								<div class="form__item">
									<svg class="form__icon form-icon-fill" enable-background="new 0 0 128 128" height="128px" id="Layer_1" version="1.1" viewBox="0 0 128 128" width="128px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M64,0C39.699,0,20,19.699,20,44s44,84,44,84s44-59.699,44-84S88.301,0,64,0z M28,44    C28,24.148,44.148,8,64,8s36,16.148,36,36c0,13.828-20.008,47.211-36,70.238C48.008,91.211,28,57.828,28,44z M64,24    c-11.047,0-20,8.953-20,20s8.953,20,20,20s20-8.953,20-20S75.047,24,64,24z M64,56c-6.617,0-12-5.383-12-12s5.383-12,12-12    s12,5.383,12,12S70.617,56,64,56z"/></g></g>
									</svg>

									<input type="text" class="form__input form__input--orange js-sitter-profile-changes-location input-datalist theme-surface-color" list="form-input-location" placeholder="City" required value="<?php echo $signInSitterLocation?>"/>

									<datalist class="js-form-input-location" id="form-input-location"></datalist>

									<svg class="form__icon form__icon--second" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
									</svg>
								</div>

								<div class="form__item">
									<svg class="form__icon" enable-background="new 0 0 64 64" height="64px" id="Layer_1" version="1.1" viewBox="0 0 64 64" width="64px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="form-icon-fill" d="M61.489,10.88c-1.633-1.645-3.763-2.481-5.909-2.532c-0.024-0.002-0.034-0.008-0.06-0.012  c-1.562-0.168-1.911-1.926-1.911-1.926l-0.018,0.051c-0.303-1.446-0.976-2.83-2.096-3.959c-3.112-3.137-8.179-3.159-11.314-0.047  c-2.84,2.816-3.101,7.219-0.823,10.358L39.35,12.85c0,0,1.31,1.438-0.035,2.771L15.322,39.415c-1.186,1.177-2.213,0.036-2.213,0.036  L13.1,39.497c-3.132-2.6-7.766-2.481-10.718,0.447c-3.135,3.109-3.156,8.177-0.045,11.313c1.043,1.052,2.315,1.705,3.65,2.046  l-0.05,0.031c0,0,1.946,0.389,2.207,2.223c0,0.009,0.003,0.009,0.005,0.015c0.074,2.086,0.898,4.151,2.482,5.747  c3.345,3.375,8.788,3.396,12.161,0.048c2.647-2.62,3.182-6.519,1.69-9.711l0.05,0.021c0,0-1.319-2.487,0.438-4.232l23.065-22.875  c0,0,1.127-1.192,3.17-0.143c0.138,0.07,0.246,0.112,0.338,0.137c3.207,1.62,7.202,1.146,9.896-1.524  C64.812,19.696,64.834,14.251,61.489,10.88z M59.036,20.783c-1.954,1.939-4.991,2.07-7.119,0.446  c-0.036-0.021-0.065-0.03-0.104-0.054c-3.116-1.931-6.939,1.592-6.939,1.592L20.841,46.6c-3.379,3.354-0.87,5.492-0.87,5.492  c1.935,1.948,1.921,5.099-0.027,7.032c-1.951,1.931-5.099,1.918-7.033-0.03c-1.079-1.089-1.536-2.545-1.4-3.956l-0.009,0.006  c0,0,0.252-3.299-1.742-4.017c-0.214-0.087-0.373-0.143-0.373-0.143c-4.029-1.259-4.773-2.362-4.773-2.362  c-1.792-1.81-1.78-4.729,0.027-6.522c1.81-1.793,4.729-1.781,6.522,0.027c0.186,0.188,0.35,0.396,0.498,0.603l0.001-0.003  c0,0,0.009,0.012,0.012,0.021c0.04,0.059,0.07,0.119,0.106,0.178c0.441,0.692,2.119,2.879,4.567,0.452l25.83-25.62  c3.617-3.587,0.529-5.862,0.529-5.862l0.042-0.019c-0.121-0.1-0.256-0.167-0.367-0.279c-1.885-1.901-1.87-4.967,0.027-6.85  c1.897-1.882,4.968-1.87,6.849,0.029c0.898,0.904,1.345,2.069,1.376,3.247l0.015,0.024c0,0,0.589,3.467,4.113,3.463  c0.001,0.001,0.001,0.004,0.002,0.006c1.544-0.132,3.127,0.382,4.305,1.569C61.185,15.222,61.17,18.667,59.036,20.783z"/>
									</svg>

									<select class="js-select2 form__input form__input--orange js-sitter-profile-changes-prefered-pets js-filter-prefered-pets-request-select2 js-select2--tags theme-surface-color" name="states[]" multiple="multiple" data-placeholder="Prefered pets" required ></select>

									<svg class="form__icon form__icon--second" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
									</svg>
								</div>

								<div class="form__item">
									<svg class="form__icon form-icon-fill" enable-background="new 0 0 256 256" height="256px" id="Layer_1" version="1.1" viewBox="0 0 256 256" width="256px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M245.084,144.453c-69.337,0-84.631-6.877-102.186-20.579c25.653-33.066,80.75-107.192,81.321-107.961  c1.977-2.66,1.422-6.419-1.237-8.395c-2.66-1.979-6.418-1.423-8.395,1.236c-0.569,0.768-55.355,74.475-80.992,107.533  C105.859,91.332,98.463,31.924,98.39,31.313c-0.24-2.012-1.946-3.526-3.972-3.526h-6c-0.389,0-0.776,0.057-1.149,0.169  c-1.894,0.567-5.374,1.612-12.774,33.775c-7.007,0.948-23.641,5.134-32.064,23.561L9.699,97.368c-1.301,0.48-2.261,1.601-2.536,2.96  c-0.08,0.394-1.865,9.742,5.461,18.698c8.042,9.831,23.426,15.106,45.767,15.703c-0.289,4.525-0.51,12.236,0.25,21.965  c-0.704-1.488-2.284-2.157-2.284-2.157c-1.163-0.533-3.194-0.406-4.035,1.427c-0.912,1.989,0.323,3.858,0.516,4.577  c0.192,0.72-0.196,1.4-0.196,1.4l-3.051,6.65l-3.051,6.65c0,0-0.263,0.739-0.934,1.063c-0.67,0.323-2.892,0.605-3.805,2.595  c-0.841,1.834,0.388,3.456,1.55,3.989c0,0,2.741,1.36,4.682-0.594c0,0,0.085-0.101,0.205-0.046c0.121,0.056,0.1,0.186,0.1,0.186  c-0.214,2.744,2.604,3.937,2.604,3.937c1.162,0.531,3.193,0.406,4.034-1.428c0.912-1.99-0.322-3.858-0.515-4.578  c-0.192-0.719,0.196-1.4,0.196-1.4l3.05-6.65l2.139-4.664c0.139,0.975,0.287,1.96,0.447,2.958  c3.393,21.209,12.573,51.924,37.036,77.807c0.787,0.832,1.846,1.252,2.907,1.252c0.986,0,1.974-0.363,2.747-1.094  c1.605-1.518,1.677-4.049,0.159-5.654c-24.708-26.141-33.188-57.826-35.854-80.75c1.401,0.112,3.162,0.202,5.238,0.202  c13.913,0,41.652-4.038,65.385-32.233c18.929,14.858,34.818,22.314,107.172,22.314c2.209,0,4-1.791,4-4  S247.293,144.453,245.084,144.453z M66.321,150.007c-0.482-11.267,0.37-18.498,0.397-18.711c0.146-1.14-0.205-2.288-0.964-3.151  s-1.854-1.358-3.003-1.358c-27.451,0-38.971-6.888-43.801-12.665c-3.269-3.91-3.965-7.839-4.045-10.146l31.898-11.77  c1.049-0.388,1.888-1.196,2.314-2.229C57.29,70.125,76.989,69.47,77.809,69.453c1.85-0.027,3.439-1.319,3.845-3.124  c4.678-20.837,7.58-28.132,8.797-30.542h0.481c2.069,13.768,11.178,63.294,37.683,86.765  C102.293,153.679,70.953,150.655,66.321,150.007z"/>
									</svg>
			
									<select class="js-select2 form__input form__input--orange js-sitter-profile-changes-prefered-services theme-surface-color" name="states[]" multiple="multiple" data-placeholder="Prefered services" required>
										<option value="Pet walking">Pet walking</option>
			
										<option value="Boarding">Boarding</option>
			
										<option value="House sitting">House sitting</option>
									</select>
			
									<svg class="form__icon form__icon--second" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
									</svg>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form__icon--lg" id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Tag" transform="translate(79.000000, 382.000000)"><path class="form-icon-fill" class="st0" d="M-51-328.9c-1.3,0-2.5-0.5-3.4-1.4l-13.3-13.3c-1.9-1.9-1.9-4.9,0-6.8l17.8-17.8     c1.6-1.6,4.5-2.8,6.7-2.8h11.4c2.6,0,4.8,2.2,4.8,4.8v11.4c0,2.2-1.2,5.1-2.8,6.7l-17.8,17.8C-48.5-329.4-49.7-328.9-51-328.9     L-51-328.9z M-43.2-368c-1.4,0-3.6,0.9-4.6,1.9l-17.8,17.8c-0.7,0.7-0.7,1.8,0,2.5l13.3,13.3c0.7,0.7,1.9,0.7,2.5,0l17.8-17.8     c1-1,1.9-3.1,1.9-4.6v-11.4c0-1-0.8-1.8-1.8-1.8H-43.2L-43.2-368z" id="Fill-129"/><path class="form-icon-fill" class="st0" d="M-39-353.1c-3.2,0-5.9-2.6-5.9-5.9c0-3.2,2.6-5.9,5.9-5.9c3.2,0,5.9,2.6,5.9,5.9     C-33.1-355.8-35.7-353.1-39-353.1L-39-353.1z M-39-362.1c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1c1.7,0,3.1-1.4,3.1-3.1     C-35.9-360.7-37.3-362.1-39-362.1L-39-362.1z" id="Fill-130"/></g></g>
									</svg>
			
									<input type="number" class="form__input form__input--orange js-sitter-profile-changes-price theme-surface-color" placeholder="Price /day" required value="<?php echo $signInSitterPrice?>"/>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form-icon-fill" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M368,224c26.5,0,48-21.5,48-48c0-26.5-21.5-48-48-48c-26.5,0-48,21.5-48,48C320,202.5,341.5,224,368,224z"/><path d="M452,64H60c-15.6,0-28,12.7-28,28.3v327.4c0,15.6,12.4,28.3,28,28.3h392c15.6,0,28-12.7,28-28.3V92.3   C480,76.7,467.6,64,452,64z M348.9,261.7c-3-3.5-7.6-6.2-12.8-6.2c-5.1,0-8.7,2.4-12.8,5.7l-18.7,15.8c-3.9,2.8-7,4.7-11.5,4.7   c-4.3,0-8.2-1.6-11-4.1c-1-0.9-2.8-2.6-4.3-4.1L224,215.3c-4-4.6-10-7.5-16.7-7.5c-6.7,0-12.9,3.3-16.8,7.8L64,368.2V107.7   c1-6.8,6.3-11.7,13.1-11.7h357.7c6.9,0,12.5,5.1,12.9,12l0.3,260.4L348.9,261.7z"/></g>
									</svg> 
			
									<input type="url" class="form__input form__input--orange js-sitter-profile-changes-image theme-surface-color" placeholder="Image url" required value="<?php echo $signInSitterImage?>"/>
			
									<svg class="form__icon form__icon--second form__icon--tooltip js-tooltip-trigger" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"/><rect height="40" width="8" x="60" y="54.5"/><rect height="8" width="8" x="60" y="35.5"/></g></svg>
			
									<p class="text text--mt-sm text--tooltip">To display the desired image use <a class="link" href="https://postimages.org/" target="_blank">PostImages</a> and get <span class="text text--underline">direct link</span> of your image.</p>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form__icon--lg form__icon--top form-icon-fill" enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="notes"><path d="M4,4v24h24V4H4z M26,26H6V6h20V26z M8,22h12v-2H8V22z M24,16H8v2h16V16z M24,12H8v2h16V12z"/></g>
									</svg>
					
									<textarea class="form__input form__input--orange form__input--textarea js-sitter-profile-changes-about theme-surface-color" placeholder="Small text about yourself" rows="5" required><?php echo $signInSitterAbout?></textarea>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form__icon--lg" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path class="form-icon-fill" d="M36 16h-2v-4c0-5.52-4.48-10-10-10s-10 4.48-10 10v4h-2c-2.21 0-4 1.79-4 4v20c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4v-20c0-2.21-1.79-4-4-4zm-12-10.2c3.42 0 6.2 2.78 6.2 6.2v4h-12.2v-4h-.2c0-3.42 2.78-6.2 6.2-6.2zm12 34.2h-24v-20h24v20zm-12-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/>
									</svg>
				
									<input type="text" class="form__input form__input--orange js-sitter-profile-changes-password theme-surface-color" placeholder="Password" required value="<?php echo $signInSitterPassword?>"/>
			
									<svg class="form__icon form__icon--second form__icon--tooltip js-tooltip-trigger" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"/><rect height="40" width="8" x="60" y="54.5"/><rect height="8" width="8" x="60" y="35.5"/></g>
									</svg>
			
									<p class="text text--mt-sm text--tooltip">Password must contain at least one uppercase letter and number.</p>
								</div>
			
								<input type="submit" value="Save changes" class="button button--xl button--filled button--orange button--mt-sm button--mr-ml-none js-sitter-profile-changes-button" data-sitterID = "<?php echo $signInSitterID?>">

								<input type="button" value="Delete profile" class="button button--xl button--filled button--red button--mt-sm button--mr-ml-none js-profile-delete-button" data-sitterID = "<?php echo $signInSitterID?>">

								<input type="button" value="Sign out" class="button button--xl button--filled button--mt-sm button--mr-ml-none js-profile-sign-out-button">

								<div class="form__footer js-form-footer">
									<p class="text text--message text--success">Changes have been saved succesfully!</p>
								</div>

								<div class="form__footer js-form-footer-delete">
									<p class="text text--message text--success">Profile has been deleted succesfully!</p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer theme-surface-color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer__inner">
							<div class="site-logo site-logo--sm theme-on-surface-color js-profile-sign-out-button">
								<a href="#">myPetSitter</a>
							</div>

							<ul class="social-media-list">
								<li class="social-media-list__item"><a href="https://web.facebook.com/profile.php?id=100077290246372" target="_blank">
									<svg class="theme-surface-fill" baseProfile="tiny" height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g>
									</svg>
								</a></li>

								<li class="social-media-list__item"><a href="https://twitter.com/myPetSitter2022" target="_blank">
									<svg class="theme-surface-fill" enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/>
									</svg>
								</a></li>

								<li class="social-media-list__item"><a href="https://www.instagram.com/my_petsitter2020/" target="_blank">
									<svg class="theme-surface-fill" data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><path d="M314.757,147.525H197.243a49.717,49.717,0,0,0-49.718,49.718V314.757a49.718,49.718,0,0,0,49.718,49.718H314.757a49.718,49.718,0,0,0,49.717-49.718V197.243A49.717,49.717,0,0,0,314.757,147.525ZM256,324.391A68.391,68.391,0,1,1,324.391,256,68.391,68.391,0,0,1,256,324.391ZM327.242,201.58a16.271,16.271,0,1,1,16.27-16.271A16.271,16.271,0,0,1,327.242,201.58Z"/><path d="M256,211.545A44.455,44.455,0,1,0,300.455,256,44.455,44.455,0,0,0,256,211.545Z"/><path d="M256,0C114.615,0,0,114.615,0,256S114.615,512,256,512,512,397.385,512,256,397.385,0,256,0ZM389.333,312.5A76.836,76.836,0,0,1,312.5,389.333H199.5A76.837,76.837,0,0,1,122.666,312.5V199.5A76.836,76.836,0,0,1,199.5,122.667H312.5A76.836,76.836,0,0,1,389.333,199.5Z"/>
									</svg>
								</a></li>

								<li class="social-media-list__item"><a href="https://www.youtube.com/channel/UCFXsyTvJZ8sx9oIsxV3Vgdg" target="_blank">
									<svg class="theme-surface-fill" enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M23.3,7.3c0-0.2-0.3-1.8-1-2.5c-0.9-1-1.9-1.1-2.4-1.1l-0.1,0c-3.1-0.2-7.7-0.2-7.8-0.2c0,0-4.7,0-7.8,0.2l-0.1,0   c-0.5,0-1.5,0.1-2.4,1.1c-0.7,0.8-1,2.4-1,2.6c0,0.1-0.2,1.9-0.2,3.8v1.7c0,1.9,0.2,3.7,0.2,3.8c0,0.2,0.3,1.8,1,2.5   c0.8,0.9,1.8,1,2.4,1.1c0.1,0,0.2,0,0.3,0c1.8,0.2,7.3,0.2,7.5,0.2c0,0,0,0,0,0c0,0,4.7,0,7.8-0.2l0.1,0c0.5-0.1,1.5-0.2,2.4-1.1   c0.7-0.8,1-2.4,1-2.6c0-0.1,0.2-1.9,0.2-3.8v-1.7C23.5,9.3,23.3,7.4,23.3,7.3z M15.9,12.2l-6,3.2c-0.1,0-0.1,0.1-0.2,0.1   c-0.1,0-0.2,0-0.2-0.1c-0.1-0.1-0.2-0.2-0.2-0.4l0-6.5c0-0.2,0.1-0.3,0.2-0.4S9.8,8,10,8.1l6,3.2c0.2,0.1,0.3,0.2,0.3,0.4   S16.1,12.1,15.9,12.2z"/></g>
									</svg>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="dark-theme-wrapper">
			<div class="dark-theme-trigger">
				<div class="dark-theme-trigger__inner"></div>
			</div>

			<div>
				<p class="text"></p>
			</div>
		</div>

		<div class="google-translate theme-surface-color">
			<div id="google_translate_element"></div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<script src="js/xmlhttp-requests.js"></script>
		<script src="js/json-location-request.js"></script>
		<script src="js/select2.js"></script>
		<script src="js/dark-theme.js"></script>
		<script src="js/tooltip-trigger.js"></script>
		<script>
			function googleTranslateElementInit() {
				new google.translate.TranslateElement( { pageLanguage: 'en' }, 'google_translate_element' );
			}

			$( document ).ajaxStop( function () {
				let signInSitterPreferedServices = <?php echo json_encode( $signInSitterPreferedServices ); ?>;

				let signInSitterPreferedPets = <?php echo json_encode( $signInSitterPreferedPets ); ?>;

				setTimeout( function() {
					$( '.js-sitter-profile-changes-prefered-pets' ).val( signInSitterPreferedPets ).trigger( 'change' );
				}, 1 );

				setTimeout( function() {
					$( '.js-sitter-profile-changes-prefered-services' ).val( signInSitterPreferedServices ).trigger( 'change' );
				}, 1 );
			} );
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</body>
</html>

<?php
	session_unset();
?>
