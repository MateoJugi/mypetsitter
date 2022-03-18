<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>myPetSitter - Admin</title>
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
								<a href="index.php">myPetSitter</a>
							</div>

							<div>
								<h5 class="title title--md theme-on-surface-color js-site-header-profile-sitter-name">
									<?php
										if ( $_SESSION["isAdmin"] == 1 ) {
											echo $_SESSION["adminName"];
										}
									?>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-header site-header--sticky js-site-header theme-surface-color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="site-header__inner">
							<div class="site-logo theme-on-surface-color">
								<a href="#">myPetSitter</a>
							</div>

							<ul class="site-header__navigation theme-on-surface-color">
								<li class="site-navigation__item"><a href="#services">Services</a></li>

								<li class="site-navigation__item"><a href="#sitters">Find sitter</a></li>

								<li class="site-navigation__item"><a href="#aboutus">About us</a></li>
							</ul>

							<div class="site-header__navigation">
								<a href="#sign-up-pop-up" class="button js-pop-up theme-on-surface-color">Sign up</a>

								<a href="#sign-in-pop-up" class="button button--filled js-pop-up">Sign in</a>
							</div>

							<div class="site-header__menu-icon site-header__menu-icon--black js-site-header-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="site-header__navigation site-header__navigation--mobile js-site-header__navigation--mobile theme-on-surface-color">
				<ul class="site-header-navigation__inner">
					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#services">Services</a></li>

					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#sitters">Find sitter</a></li>

					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#aboutus">About us</a></li>

					<li class="site-navigation__item site-navigation__item--mobile site-navigation__item--buttons js-site-navigation-item-mobile">
						<a href="#sign-up-pop-up" class="button js-pop-up">Sign up</a>

						<a href="#sign-in-pop-up" class="button button--filled js-pop-up">Sign in</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="section section--pt-md theme-background-color">
			<div class="navigation-section-link" id="sitters"></div>

			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-12">
								<div class="filter-form">
									<div>
										<div class="filter-form__main">
											<div class="position-relative">
												<input type="text" placeholder="Choose location:" class="filter-form__item input-datalist js-filter-location theme-surface-color" list="filter-location">

												<datalist class="js-filter-location-request" id="filter-location">
												</datalist>

												<svg class="input-icon" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
												</svg>
											</div>

											<div class="position-relative">
												<input type="text" placeholder="Choose pet type:" class="filter-form__item input-datalist js-filter-prefered-pets theme-surface-color" list="filter-pets">

												<datalist class="js-filter-prefered-pets-request" id="filter-pets">
												</datalist>

												<svg class="input-icon" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
												</svg>
											</div>

											<div class="position-relative">
												<input type="text" placeholder="Choose service:" class="filter-form__item input-datalist js-filter-service theme-surface-color" list="filter-service">

												<datalist id="filter-service">
													<option value="Pet walking">

													<option value="Boarding">

													<option value="House sitting">
												</datalist>

												<svg class="input-icon" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
												</svg>
											</div>

											<div class="position-relative">
												<select type="option" class="filter-form__item js-filter-price theme-surface-color">
													<option min="" max="" value="" selected>Choose price range:</option>

													<option min="0" max="50">Less than 50$ /day</option>

													<option min="50" max="150">From 50$ to 150$ /day</option>

													<option min="150" max="999">More than 150$ /day</option>
												</select>

												<svg class="input-icon" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
												</svg>
											</div>
										</div>
									</div>

									<div>
										<a href="#" class="button button--filled button--ml-sm js-filter-button">Filter</a>
									</div>
								</div>
							</div>
						</div>

						<?php
							if ( $_SESSION["isAdmin"] == 1 ) {
								echo '<div class="row">
										<div class="col-12">
											<div class="card-list">
												<div class="row js-pull-request"></div>

												<div class="row">
													<div class="col-12 col--pr-pl-none">
														<div class="card-list__pagination js-pagination-buttons"></div>
													</div>
												</div>
											</div>
										</div>
									</div>';
							}
						?>
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
		<script src="magnific-popup/jquery.magnific-popup.js"></script>
		<script src="magnific-popup/magnific-popup-trigger.js"></script>
		<script src="js/xmlhttp-requests.js"></script>
		<script src="js/dark-theme.js"></script>
		<script src="js/card-list-pagination--active.js"></script>
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