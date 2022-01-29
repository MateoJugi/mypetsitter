<?php
	include 'php/connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>myPetSitter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<div class="site-header site-header--bg-none js-site-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="site-header__inner">
							<div class="site-logo">
								<a href="#">myPetSitter</a>
							</div>

							<ul class="site-header__navigation">
								<li class="site-navigation__item"><a href="#services">Services</a></li>

								<li class="site-navigation__item"><a href="#aboutus">About us</a></li>

								<li class="site-navigation__item site-navigation__item--filled"><a href="#sitters">Find sitter</a></li>
							</ul>

							<!-- <div class="site-header__navigation">
								<a href="#sign-up-pop-up" class="button button--sm js-pop-up">Sign up</a>

								<a href="#sign-in-pop-up" class="button button--filled button--ml-md js-pop-up">Sign in</a>
							</div> -->

							<div class="site-header__menu-icon js-site-header-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<ul class="site-header__navigation site-header__navigation--mobile js-site-header__navigation--mobile">
				<div class="site-header-navigation__inner">
					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#services">Services</a></li>

					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#aboutus">About us</a></li>

					<li class="site-navigation__item site-navigation__item--filled site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#sitters">Find sitter</a></li>
				</div>
			</ul>
		</div>

		<div class="site-header site-header--sticky js-site-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="site-header__inner">
							<div class="site-logo">
								<a href="#">myPetSitter</a>
							</div>

							<ul class="site-header__navigation">
								<li class="site-navigation__item"><a href="#services">Services</a></li>

								<li class="site-navigation__item"><a href="#aboutus">About us</a></li>

								<li class="site-navigation__item site-navigation__item--filled"><a href="#sitters">Find sitter</a></li>
							</ul>

							<div class="site-header__menu-icon site-header__menu-icon--black js-site-header-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<ul class="site-header__navigation site-header__navigation--mobile js-site-header__navigation--mobile">
				<div class="site-header-navigation__inner">
					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#services">Services</a></li>

					<li class="site-navigation__item site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#aboutus">About us</a></li>

					<li class="site-navigation__item site-navigation__item--filled site-navigation__item--mobile js-site-navigation-item-mobile"><a href="#sitters">Find sitter</a></li>
				</div>
			</ul>
		</div>

		<div class="hero js-blur" style="background-image: url( images/content/dog-and-woman.jpg );">
			<div class="container">
				<div class="row position-relative">
					<div class="col-12 col-7-lg">
						<div class="hero__wrapper">
							<div class="hero__inner">
								<h1 class="title title--xl title--white title--mb-sm">Looking for someone to take care of your pet?</h1>

								<div class="text text--lg text--white text--mb-sm">
									<p>Meet local sitters who will treat your pets like family.</p>
								</div>

								<a href="#sitters" class="button button--filled">Find sitters</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="sponsors-list">
			<a href="#">
				<img src="images/icons/honda-marine-logo.png" class="sponsors-list__item">
			</a>

			<a href="#">
				<img src="images/icons/toto-travel-logo.png" class="sponsors-list__item">
			</a>

			<a href="#">
				<img src="images/icons/yachtman-logo.png" class="sponsors-list__item">
			</a>

			<a href="#">
				<img src="images/icons/adria-docks-logo.png" class="sponsors-list__item">
			</a>

			<a href="#">
				<img src="images/icons/generali.png" class="sponsors-list__item">
			</a>

			<a href="#">
				<img src="images/icons/frigo-ko-logo.png" class="sponsors-list__item">
			</a>
		</div> -->

		<div class="js-blur">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="title title--sm title--mb-xs">How it works</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-6-lg col-offset-3-lg">
							<h4 class="title title--lg title--mb-lg">Find your local pet sitters in the easiest way</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-6-sm col-4-lg">
							<div class="icon-wrapper">
								<svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M31 28h-1.59l-.55-.55C30.82 25.18 32 22.23 32 19c0-7.18-5.82-13-13-13S6 11.82 6 19s5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55V31l10 9.98L40.98 38 31 28zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z"/><path d="M0 0h48v48H0z" fill="none"/>
								</svg>
							</div>

							<h5 class="title title--md title--mt-md title--mb-sm">Find someone you like</h5>

							<div class="text text--mb-md">
								<p>FInd someone your think would be the perfect sitter for your pet.</p>
							</div>
						</div>

						<div class="col-12 col-6-sm col-4-lg">
							<div class="icon-wrapper icon-wrapper--orange">
								<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path fill="#fff" d="M24,29H8a5,5,0,0,1-5-5V10A5,5,0,0,1,8,5H24a5,5,0,0,1,5,5V24A5,5,0,0,1,24,29ZM8,7a3,3,0,0,0-3,3V24a3,3,0,0,0,3,3H24a3,3,0,0,0,3-3V10a3,3,0,0,0-3-3Z"/><path fill="#fff" d="M24,25H20a1,1,0,0,1-1-1V20a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,24,25Zm-3-2h2V21H21Z"/><path fill="#fff" d="M28,13H4a1,1,0,0,1,0-2H28a1,1,0,0,1,0,2Z"/><path fill="#fff" d="M11,9a1,1,0,0,1-1-1V4a1,1,0,0,1,2,0V8A1,1,0,0,1,11,9Z"/><path fill="#fff" d="M21,9a1,1,0,0,1-1-1V4a1,1,0,0,1,2,0V8A1,1,0,0,1,21,9Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g>
								</svg>
							</div>

							<h5 class="title title--md title--mt-md title--mb-sm">Meet up</h5>

							<div class="text text--mb-md">
								<p>Contact the sitter you found, make an appointment and meet up.</p>
							</div>
						</div>

						<div class="col-12 col-6-sm col-4-lg">
							<div class="icon-wrapper">
								<svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polyline fill="none" points="   649,137.999 675,137.999 675,155.999 661,155.999  " stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><polyline fill="none" points="   653,155.999 649,155.999 649,141.999  " stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><polyline fill="none" points="   661,156 653,162 653,156  " stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g><g><path d="M25,13h-1v-3c0-0.552-0.447-1-1-1H4c-0.552,0-1,0.448-1,1s0.448,1,1,1h18v12c0,2.757-2.243,5-5,5h-7c-2.757,0-5-2.243-5-5   v-9c0-0.552-0.448-1-1-1s-1,0.448-1,1v9c0,3.859,3.14,7,7,7h7c3.859,0,7-3.141,7-7v-1h1c2.206,0,4-1.794,4-4v-1   C29,14.794,27.206,13,25,13z M27,18c0,1.103-0.897,2-2,2h-1v-5h1c1.103,0,2,0.897,2,2V18z"/><path d="M9,8c0.552,0,1-0.448,1-1V5c0-0.552-0.448-1-1-1S8,4.448,8,5v2C8,7.552,8.448,8,9,8z"/><path d="M13,8c0.552,0,1-0.448,1-1V3c0-0.552-0.448-1-1-1s-1,0.448-1,1v4C12,7.552,12.448,8,13,8z"/><path d="M17,8c0.553,0,1-0.448,1-1V5c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v2C16,7.552,16.448,8,17,8z"/></g>
								</svg>
							</div>

							<h5 class="title title--md title--mt-md title--mb-sm">Relax and enjoy</h5>

							<div class="text text--mb-md">
								<p>Knowing your pet is in good hands you car relax and do anything else.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section--text-align-left section--pt-pb-lg position-relative">
				<div class="navigation-section-link" id="services"></div>

				<div class="container">
					<div class="row">
						<div class="col-12 col-6-lg col-offset-6-lg">
							<div class="row">
								<div class="col-12">
									<h3 class="title title--sm title--mb-xs">Best services</h3>
								</div>
							</div>
			
							<div class="row">
								<div class="col-12">
									<h4 class="title title--lg title--mb-lg">Feel the best experience with our sitter services</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="display-flex">
										<div>
											<div class="icon-wrapper icon-wrapper--sm">
												<svg enable-background="new 0 0 256 256" height="256px" id="Layer_1" version="1.1" viewBox="0 0 256 256" width="256px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path stroke-width="4px" d="M245.084,144.453c-69.337,0-84.631-6.877-102.186-20.579c25.653-33.066,80.75-107.192,81.321-107.961  c1.977-2.66,1.422-6.419-1.237-8.395c-2.66-1.979-6.418-1.423-8.395,1.236c-0.569,0.768-55.355,74.475-80.992,107.533  C105.859,91.332,98.463,31.924,98.39,31.313c-0.24-2.012-1.946-3.526-3.972-3.526h-6c-0.389,0-0.776,0.057-1.149,0.169  c-1.894,0.567-5.374,1.612-12.774,33.775c-7.007,0.948-23.641,5.134-32.064,23.561L9.699,97.368c-1.301,0.48-2.261,1.601-2.536,2.96  c-0.08,0.394-1.865,9.742,5.461,18.698c8.042,9.831,23.426,15.106,45.767,15.703c-0.289,4.525-0.51,12.236,0.25,21.965  c-0.704-1.488-2.284-2.157-2.284-2.157c-1.163-0.533-3.194-0.406-4.035,1.427c-0.912,1.989,0.323,3.858,0.516,4.577  c0.192,0.72-0.196,1.4-0.196,1.4l-3.051,6.65l-3.051,6.65c0,0-0.263,0.739-0.934,1.063c-0.67,0.323-2.892,0.605-3.805,2.595  c-0.841,1.834,0.388,3.456,1.55,3.989c0,0,2.741,1.36,4.682-0.594c0,0,0.085-0.101,0.205-0.046c0.121,0.056,0.1,0.186,0.1,0.186  c-0.214,2.744,2.604,3.937,2.604,3.937c1.162,0.531,3.193,0.406,4.034-1.428c0.912-1.99-0.322-3.858-0.515-4.578  c-0.192-0.719,0.196-1.4,0.196-1.4l3.05-6.65l2.139-4.664c0.139,0.975,0.287,1.96,0.447,2.958  c3.393,21.209,12.573,51.924,37.036,77.807c0.787,0.832,1.846,1.252,2.907,1.252c0.986,0,1.974-0.363,2.747-1.094  c1.605-1.518,1.677-4.049,0.159-5.654c-24.708-26.141-33.188-57.826-35.854-80.75c1.401,0.112,3.162,0.202,5.238,0.202  c13.913,0,41.652-4.038,65.385-32.233c18.929,14.858,34.818,22.314,107.172,22.314c2.209,0,4-1.791,4-4  S247.293,144.453,245.084,144.453z M66.321,150.007c-0.482-11.267,0.37-18.498,0.397-18.711c0.146-1.14-0.205-2.288-0.964-3.151  s-1.854-1.358-3.003-1.358c-27.451,0-38.971-6.888-43.801-12.665c-3.269-3.91-3.965-7.839-4.045-10.146l31.898-11.77  c1.049-0.388,1.888-1.196,2.314-2.229C57.29,70.125,76.989,69.47,77.809,69.453c1.85-0.027,3.439-1.319,3.845-3.124  c4.678-20.837,7.58-28.132,8.797-30.542h0.481c2.069,13.768,11.178,63.294,37.683,86.765  C102.293,153.679,70.953,150.655,66.321,150.007z"/>
												</svg>
											</div>
										</div>

										<div>
											<h5 class="title title--md title--mb-xs">Pet walking</h5>

											<div class="text text--mb-md">
												<p>Find ideal partner for your pet to walk with.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="display-flex">
										<div>
											<div class="icon-wrapper icon-wrapper--sm">
												<svg id="Icons" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">.st0{fill:none;stroke:#fe6536;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><path class="st0" d="M28,31H18c-1.1,0-2-0.9-2-2V16c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v13C30,30.1,29.1,31,28,31z"/><path class="st0" d="M19,31H4c-1.1,0-2-0.9-2-2v-9c0-1.1,0.9-2,2-2h12"/><line class="st0" x1="16" x2="30" y1="20" y2="20"/><rect class="st0" height="13" width="6" x="20" y="1"/><line class="st0" x1="19" x2="27" y1="1" y2="1"/><line class="st0" x1="6" x2="6" y1="18" y2="31"/><rect class="st0" height="3" width="4" x="9" y="15"/>
												</svg>
											</div>
										</div>

										<div>
											<h5 class="title title--md title--mb-xs">Boarding</h5>

											<div class="text text--mb-md">
												<p>Let someone take care of your pet in their home.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="display-flex">
										<div>
											<div class="icon-wrapper icon-wrapper--sm">
												<svg enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M27,29H5V17H3.235c-1.138,0-1.669-1.419-0.812-2.168L14.131,3.745c1.048-0.993,2.689-0.993,3.737,0l11.707,11.087  C30.433,15.58,29.902,17,28.763,17H27V29z" fill="none" id="XMLID_1_" stroke="#fe6536" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M20,29h-8v-6c0-2.209,1.791-4,4-4h0c2.209,0,4,1.791,4,4V29z" fill="none" id="XMLID_2_" stroke="#fe6536" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
												</svg>
											</div>
										</div>

										<div>
											<h5 class="title title--md title--mb-xs">House sitting, drop-in visits</h5>

											<div class="text">
												<p>Find someone to look after your pet in your own home.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section__image section__image--dog-on-bed" style="background-image: url( images/content/dog-on-bed.jpg );"></div>
			</div>

			<div class="section">
				<div class="navigation-section-link" id="sitters"></div>

				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<h3 class="title title--sm title--mb-xs">Meet now</h3>
								</div>
							</div>
			
							<div class="row">
								<div class="col-12 col-6-lg col-offset-3-lg">
									<h4 class="title title--lg title--mb-md">Find your local pet sitter</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="filter-form">
										<div>
											<div class="filter-form__main">
												<div class="position-relative">
													<select type="option" class="filter-form__item js-filter-location">
														<option value="" selected>Choose location:</option>

														<option value="Zagreb">Zagreb</option>

														<option value="Osijek">Osijek</option>

														<option value="Split">Split</option>

														<option value="Rijeka">Rijeka</option>

														<option value="Šibenik">Šibenik</option>

														<option value="Pula">Pula</option>

														<option value="Varaždin">Varaždin</option>

														<option value="Dubrovnik">Dubrovnik</option>
													</select>

													<svg class="filter-form__arrow" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
													</svg>
												</div>

												<div class="position-relative">
													<select type="option" class="filter-form__item js-filter-service">
														<option value="" selected>Choose service:</option>

														<option value="Pet walking">Pet walking</option>

														<option value="Boarding">Boarding</option>

														<option value="House sitting">House sitting</option>
													</select>

													<svg class="filter-form__arrow" height="25px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
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

							<div class="row">
								<div class="col-12">
									<div class="card-list">
										<div class="row js-pull-request"></div>

										<div class="row">
											<ul class="card-list__pagination js-pagination-buttons">
												<?php
													$perPage = 4;

													$result = mysqli_query( $con, "SELECT COUNT( sitterID ) FROM sitters" );

													$numberOfCars = $result->fetch_array()[0] ?? '';

													$numberOfButtons = $numberOfCars / $perPage;

													for ( $i = 1; $i <= ceil( $numberOfButtons ); $i++ ) {
														echo '<li class="card-list-pagination__item js-card-list-pagination-item">'.$i.'</li>';
													}

													$con->close();
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section--text-align-left section--pb-lg">
				<div class="navigation-section-link" id="aboutus"></div>

				<div class="container">
					<div class="row position-relative">
						<div class="col-12 col-6-lg col-5-xl">
							<div class="row">
								<div class="col-12">
									<h3 class="title title--sm title--mb-xs">About us</h3>
								</div>
							</div>
			
							<div class="row">
								<div class="col-12">
									<h4 class="title title--lg title--mb-md">Get to know us</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="text">
										<p class="text--mb-sm">Whether you need a dog walker for the day, overnight boarding for a month, or daily visits for your cat, there’s a sitter who’s the perfect match for you, your pets, and your lifestyle.</p>

										<p class="text--mb-sm">We believe everyone deserves the unconditional love of a pet, and our mission is to make it easier to experience that love.</p>

										<p>They’re there for us when we need it most, and we’re there for them too. We believe this focus on treating pets like family is part of why more than 3 thousand services have been booked already.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-6-lg col-6-xl col-offset-1-xl display-flex-align-center">
							<div class="image-galery js-image-galery"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="white-pop-up white-pop-up--orange-before mfp-hide" id="sign-up-pop-up">
				<form class="form" method="post" action="php/sign-Up.php">
					<h3 class="title title--lg title--white title--mb-xl">Create<br> Account</h3>

					<div class="form__item">
						<svg class="form__icon" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><path class="form-icon-fill" d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"/><path class="form-icon-fill" d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"/></svg>

						<input type="text" class="form__input form__input--orange" placeholder="Name" name="adminNameSignUp" required>
					</div>

					<div class="form__item">
						<svg class="form__icon form-icon-stroke" fill="none" height="24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
						</svg>

						<input type="text" class="form__input form__input--orange" placeholder="Email" name="adminEmailSignUp" required>
					</div>

					<div class="form__item">
						<svg class="form__icon form__icon--lg" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path class="form-icon-fill" d="M36 16h-2v-4c0-5.52-4.48-10-10-10s-10 4.48-10 10v4h-2c-2.21 0-4 1.79-4 4v20c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4v-20c0-2.21-1.79-4-4-4zm-12-10.2c3.42 0 6.2 2.78 6.2 6.2v4h-12.2v-4h-.2c0-3.42 2.78-6.2 6.2-6.2zm12 34.2h-24v-20h24v20zm-12-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/>
						</svg>

						<input type="password" class="form__input form__input--orange" placeholder="Password" name="adminPasswordSignUp" required>
					</div>

					<input type="submit" value="Sign up" class="button button--xl button--filled button--orange button--mt-sm button--mr-ml-none" name="signUpSubmit">
				</form>
			</div>

			<div class="white-pop-up mfp-hide" id="sign-in-pop-up">
				<form class="form" method="post" action="php/sign-in.php">
					<h3 class="title title--lg title--white title--mb-xl">Welcome<br> Back</h3>

					<div class="form__item">
						<svg class="form__icon" fill="none" height="24" stroke="#808080" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
						</svg>

						<input type="text" class="form__input" placeholder="Email" name="adminNameSignIn" required>
					</div>

					<div class="form__item">
						<svg class="form__icon form__icon--lg" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path fill="#808080" d="M36 16h-2v-4c0-5.52-4.48-10-10-10s-10 4.48-10 10v4h-2c-2.21 0-4 1.79-4 4v20c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4v-20c0-2.21-1.79-4-4-4zm-12-10.2c3.42 0 6.2 2.78 6.2 6.2v4h-12.2v-4h-.2c0-3.42 2.78-6.2 6.2-6.2zm12 34.2h-24v-20h24v20zm-12-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/></svg>

						<input type="password" class="form__input" placeholder="Password" name="adminPasswordSignIn" required>
					</div>

					<a href="#" class="text text--lg text--blue flex--align-self-end text--mt-sm">Forgot your password?</a>

					<input type="submit" value="Sign in" class="button button--xl button--filled button--mt-sm button--mr-ml-none" name="signInSubmit">
				</form>
			</div>

			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="footer__inner">
								<div class="site-logo site-logo--sm">
									<a href="#">myPetSitter</a>
								</div>

								<ul class="social-media-list">
									<li class="social-media-list__item"><a href="https://web.facebook.com/profile.php?id=100077290246372">
										<svg baseProfile="tiny" height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g>
										</svg>
									</a></li>

									<li class="social-media-list__item"><a href="https://twitter.com/myPetSitter2022">
										<svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/>
										</svg>
									</a></li>

									<li class="social-media-list__item"><a href="https://www.instagram.com/my_petsitter2020/">
										<svg data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><path d="M314.757,147.525H197.243a49.717,49.717,0,0,0-49.718,49.718V314.757a49.718,49.718,0,0,0,49.718,49.718H314.757a49.718,49.718,0,0,0,49.717-49.718V197.243A49.717,49.717,0,0,0,314.757,147.525ZM256,324.391A68.391,68.391,0,1,1,324.391,256,68.391,68.391,0,0,1,256,324.391ZM327.242,201.58a16.271,16.271,0,1,1,16.27-16.271A16.271,16.271,0,0,1,327.242,201.58Z"/><path d="M256,211.545A44.455,44.455,0,1,0,300.455,256,44.455,44.455,0,0,0,256,211.545Z"/><path d="M256,0C114.615,0,0,114.615,0,256S114.615,512,256,512,512,397.385,512,256,397.385,0,256,0ZM389.333,312.5A76.836,76.836,0,0,1,312.5,389.333H199.5A76.837,76.837,0,0,1,122.666,312.5V199.5A76.836,76.836,0,0,1,199.5,122.667H312.5A76.836,76.836,0,0,1,389.333,199.5Z"/>
										</svg>
									</a></li>

									<li class="social-media-list__item"><a href="https://www.youtube.com/channel/UCFXsyTvJZ8sx9oIsxV3Vgdg">
										<svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M23.3,7.3c0-0.2-0.3-1.8-1-2.5c-0.9-1-1.9-1.1-2.4-1.1l-0.1,0c-3.1-0.2-7.7-0.2-7.8-0.2c0,0-4.7,0-7.8,0.2l-0.1,0   c-0.5,0-1.5,0.1-2.4,1.1c-0.7,0.8-1,2.4-1,2.6c0,0.1-0.2,1.9-0.2,3.8v1.7c0,1.9,0.2,3.7,0.2,3.8c0,0.2,0.3,1.8,1,2.5   c0.8,0.9,1.8,1,2.4,1.1c0.1,0,0.2,0,0.3,0c1.8,0.2,7.3,0.2,7.5,0.2c0,0,0,0,0,0c0,0,4.7,0,7.8-0.2l0.1,0c0.5-0.1,1.5-0.2,2.4-1.1   c0.7-0.8,1-2.4,1-2.6c0-0.1,0.2-1.9,0.2-3.8v-1.7C23.5,9.3,23.3,7.4,23.3,7.3z M15.9,12.2l-6,3.2c-0.1,0-0.1,0.1-0.2,0.1   c-0.1,0-0.2,0-0.2-0.1c-0.1-0.1-0.2-0.2-0.2-0.4l0-6.5c0-0.2,0.1-0.3,0.2-0.4S9.8,8,10,8.1l6,3.2c0.2,0.1,0.3,0.2,0.3,0.4   S16.1,12.1,15.9,12.2z"/></g>
										</svg>
									</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="js/site-header-navigation-mobile.js"></script>
		<script src="js/site-header--sticky.js"></script>
		<script src="js/filter-form--more-options.js"></script>
		<script src="js/card-list-pagination--active.js"></script>
		<script src="js/database-request.js"></script>
		<script src="magnific-popup/jquery.magnific-popup.js"></script>
		<script src="js/popup-form.js"></script>
		<script>
			$( '.js-card-list-pagination-item' ).first().addClass( 'card-list-pagination__item--active' );
		</script>
	</body>
</html>
