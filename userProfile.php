<?php
	session_start();

	$userID = $_SESSION["userID"];
    $userFullName = $_SESSION["userFullName"];
    $userEmail = $_SESSION["userEmail"];
    $userContactNumber = $_SESSION["userContactNumber"];
    $userPassword = $_SESSION["userPassword"];
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
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

    <body>
		<div class="site-header site-header--color-black js-site-header theme-surface-color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="site-header__inner site-header__inner--flex-direction">
							<div class="site-logo theme-on-surface-color js-profile-sign-out-button">
								<a href="#">myPetSitter</a>
							</div>

							<div>
								<h5 class="title title--md theme-on-surface-color js-site-header-profile-sitter-name">
									<?php echo $signInSitterFullName ?>
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
					<div class="col-6">
						<div class="white-pop-up white-pop-up--title-lg white-pop-up--orange-before theme-surface-color">
							<form class="form" enctype="multipart/form-data" onsubmit="return false">
								<h3 class="title title--lg title--white title--mb-xl theme-on-surface-color">Change your<br> information</h3>
			
								<div class="form__item">
									<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/>
									</svg>
				
									<input type="text" class="form__input form__input--orange js-sitter-profile-changes-fullname theme-surface-color" placeholder="Full name" required value="<?php echo $userFullName ?>"/>
								</div>
				
								<div class="form__item">
									<svg class="form__icon form-icon-stroke" fill="none" height="24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
									</svg>
				
									<input type="email" class="form__input form__input--orange js-sitter-profile-changes-email theme-surface-color" placeholder="Email" required value="<?php echo $userEmail ?>"/>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form__icon--lg" id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Tag" transform="translate(79.000000, 382.000000)"><path class="form-icon-fill" class="st0" d="M-51-328.9c-1.3,0-2.5-0.5-3.4-1.4l-13.3-13.3c-1.9-1.9-1.9-4.9,0-6.8l17.8-17.8     c1.6-1.6,4.5-2.8,6.7-2.8h11.4c2.6,0,4.8,2.2,4.8,4.8v11.4c0,2.2-1.2,5.1-2.8,6.7l-17.8,17.8C-48.5-329.4-49.7-328.9-51-328.9     L-51-328.9z M-43.2-368c-1.4,0-3.6,0.9-4.6,1.9l-17.8,17.8c-0.7,0.7-0.7,1.8,0,2.5l13.3,13.3c0.7,0.7,1.9,0.7,2.5,0l17.8-17.8     c1-1,1.9-3.1,1.9-4.6v-11.4c0-1-0.8-1.8-1.8-1.8H-43.2L-43.2-368z" id="Fill-129"/><path class="form-icon-fill" class="st0" d="M-39-353.1c-3.2,0-5.9-2.6-5.9-5.9c0-3.2,2.6-5.9,5.9-5.9c3.2,0,5.9,2.6,5.9,5.9     C-33.1-355.8-35.7-353.1-39-353.1L-39-353.1z M-39-362.1c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1c1.7,0,3.1-1.4,3.1-3.1     C-35.9-360.7-37.3-362.1-39-362.1L-39-362.1z" id="Fill-130"/></g></g>
									</svg>
			
									<input type="number" class="form__input form__input--orange js-sitter-profile-changes-price theme-surface-color" placeholder="Contact number" required value="<?php echo $userContactNumber ?>"/>
								</div>
			
								<div class="form__item">
									<svg class="form__icon form__icon--lg" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path class="form-icon-fill" d="M36 16h-2v-4c0-5.52-4.48-10-10-10s-10 4.48-10 10v4h-2c-2.21 0-4 1.79-4 4v20c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4v-20c0-2.21-1.79-4-4-4zm-12-10.2c3.42 0 6.2 2.78 6.2 6.2v4h-12.2v-4h-.2c0-3.42 2.78-6.2 6.2-6.2zm12 34.2h-24v-20h24v20zm-12-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/>
									</svg>
				
									<input type="password" class="form__input form__input--orange js-sitter-profile-changes-password js-form-input-password theme-surface-color" placeholder="Password" minlength="5" required value="<?php echo $userPassword ?>"/>
			
									<div class="tooltip js-tooltip">
										<svg class="form__icon form__icon--second form__icon--tooltip" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"/><rect height="40" width="8" x="60" y="54.5"/><rect height="8" width="8" x="60" y="35.5"/></g>
										</svg>

										<p class="tooltip__text">Password must contain at least one <span class="text text--underline">uppercase letter</span> and <span class="text text--underline">number.</span><br> (Click to keep active.)</p>
									</div>

									<svg class="form__icon form__icon--second form__icon--third form__icon--password-reveal form__icon--password-reveal-orange form-icon-stroke" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M16,7C9.934,7,4.798,10.776,3,16c1.798,5.224,6.934,9,13,9s11.202-3.776,13-9C27.202,10.776,22.066,7,16,7z" fill="none" id="XMLID_10_" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="16" cy="16" fill="none" id="XMLID_12_" r="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
									</svg>
								</div>
			
								<input type="submit" value="Save changes" class="button button--xl button--filled button--orange button--mt-sm button--mr-ml-none js-profile-changes-button" data-profileType = "userProfile" data-profileID = "<?php echo $userID ?>">

								<input type="button" value="Delete profile" class="button button--xl button--filled button--red button--mt-sm button--mr-ml-none js-profile-delete-button" data-profileType = "userProfile" data-profileID = "<?php echo $userID ?>">

								<input type="button" value="Sign out" class="button button--xl button--filled button--mt-sm button--mr-ml-none js-profile-sign-out-button">
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
				<p class="text">Dark theme</p>
			</div>
		</div>

		<div class="google-translate theme-surface-color">
			<div id="google_translate_element"></div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<script src="magnific-popup/jquery.magnific-popup.js"></script>
		<script src="magnific-popup/magnific-popup-trigger.js"></script>
		<script src="js/xmlhttp-requests.js"></script>
		<!-- <script src="js/select2.js"></script> -->
		<script src="js/dark-theme.js"></script>
		<script src="js/input-password-reveal.js"></script>
		<script src="js/tooltip-trigger.js"></script>
		<script>
			function googleTranslateElementInit() {
				new google.translate.TranslateElement( { pageLanguage: 'en' }, 'google_translate_element' );
			}

			$( '.dark-theme-wrapper' ).css( { 'opacity': '1', 'zIndex': '1' } );
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </body>
</html>

<?php
	session_unset();
?>