<?php
	include 'connection.php';
	include 'number-of-sitters-per-page.php';
	include 'number-of-sitters-per-admin-page.php';

	$windowLocation = $_GET["windowLocation"];

	if ( strpos( $windowLocation, "admin.php" ) ) {
		$limit = "LIMIT 0, $sittersPerAdminPage";
	} else {
		$limit = "LIMIT 0, $sittersPerPage";
	}

	$result = mysqli_query( $con, "SELECT * FROM (SELECT sitters.sitterID, GROUP_CONCAT(DISTINCT(petType) SEPARATOR ', ' ) AS sitterPreferedPet, GROUP_CONCAT(DISTINCT(serviceType) SEPARATOR ', ' ) AS sitterPreferedService FROM sitterspetsconnection INNER JOIN sitters ON sitterspetsconnection.sitterID=sitters.sitterID INNER JOIN pets ON sitterspetsconnection.petID=pets.petID INNER JOIN sittersservicesconnection ON sittersservicesconnection.sitterID=sitterspetsconnection.sitterID INNER JOIN services ON sittersservicesconnection.serviceID=services.serviceID GROUP BY sitterID ORDER BY sitterPrice) T INNER JOIN sitters on sitters.sitterID = T.sitterID ORDER BY sitterPrice $limit" );

	while( $row = mysqli_fetch_array( $result ) ) {
		if ( strpos( $windowLocation, "admin.php" ) ) {
			$button = '<a href="#" class="button button--xl button--filled button--red js-profile-delete-button" data-sitterID = "' .$row["sitterID"]. '">Delete profile</a>';
		} else {
			$button = '<a href="#rent-pop-up" class="button button--xl button--filled js-popup-form" data-sitterEmail="' .$row["sitterEmail"]. '" data-sitterFullName="' .$row["sitterFullName"]. '" data-sitterPrice="' .$row["sitterPrice"]. '" data-sitterLocation="' .$row["sitterLocation"]. '" data-sitterPreferedService="' .$row["sitterPreferedService"]. '"  data-sitterPrice="' .$row["sitterPrice"]. '" data-sitterImage="' .$row["sitterImage"]. '" data-sitterPreferedPet="' .$row["sitterPreferedPet"]. '" data-sitterID = "' .$row["sitterID"]. '">Meet up</a>';
		}

		echo '<div class="col-12 col-6-sm col-4-lg col-3-xl">
					<div class="card-list__item theme-surface-color">
						<div class="card-list-item__image" style="background-image: url( ' .$row["sitterImage"]. ' );"></div>

						<div class="card-list-item__main">
							<p class="text text--sm text--border text--mb-xs">' .$row["sitterLocation"]. '</p>

							<h5 class="title title--md title--mb-xs theme-on-surface-color">' .$row["sitterFullName"]. '</h5>

							<p class="text text--md text--orange">$' .$row["sitterPrice"]. '<span class="text text--md"> /day</span></p>

							<svg class="card-list-item__icon js-card-list-item-comments-button" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M20,1H4C1.8,1,0,2.8,0,5v10c0,2.2,1.8,4,4,4v3c0,0.9,1.1,1.3,1.7,0.7L9.4,19H20c2.2,0,4-1.8,4-4V5   C24,2.8,22.2,1,20,1z M14,13H8c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1C15,12.6,14.6,13,14,13z M16,9H8   C7.4,9,7,8.6,7,8c0-0.6,0.4-1,1-1h8c0.6,0,1,0.4,1,1C17,8.6,16.6,9,16,9z" id="message"/></g>
							</svg>
						</div>

						<div class="card-list-item__footer">
							<p class="text text--sm">' .$row["sitterPreferedService"]. '</p>

							<p class="text text--sm">' .$row["sitterPreferedPet"]. '</p>
						</div>'.

						$button
					.'</div>
				</div>';
	}

	$con -> close();
?>
