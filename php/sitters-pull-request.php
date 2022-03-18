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
			
			$cardClickListener = " js-profile-delete-button";
		} else {
			$button = '<a href="#rent-pop-up" class="button button--xl button--filled">Meet up</a>';

			$cardClickListener = " js-popup-form";
		}

		echo '<div class="col-12 col-6-sm col-4-lg col-3-xl">
					<div class="card-list__item theme-surface-color' .$cardClickListener. '" data-sitterEmail="' .$row["sitterEmail"]. '" data-sitterFullName="' .$row["sitterFullName"]. '" data-sitterPrice="' .$row["sitterPrice"]. '" data-sitterLocation="' .$row["sitterLocation"]. '" data-sitterPreferedService="' .$row["sitterPreferedService"]. '"  data-sitterPrice="' .$row["sitterPrice"]. '" data-sitterImage="' .$row["sitterImage"]. '" data-sitterPreferedPet="' .$row["sitterPreferedPet"]. '" data-sitterID = "' .$row["sitterID"]. '">
						<div class="card-list-item__image" data-mfp-src="' .$row["sitterImage"]. '" style="background-image: url( ' .$row["sitterImage"]. ' );"></div>

						<div class="card-list-item__main">
							<p class="text text--sm text--border text--mb-xs">' .$row["sitterLocation"]. '</p>

							<h5 class="title title--md title--mb-xs theme-on-surface-color">' .$row["sitterFullName"]. '</h5>

							<p class="text text--md text--orange">$' .$row["sitterPrice"]. '<span class="text text--md"> /day</span></p>
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
