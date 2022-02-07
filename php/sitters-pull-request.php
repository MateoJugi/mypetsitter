<?php
	include 'connection.php';

	$result = mysqli_query( $con, "SELECT * FROM sitters ORDER BY sitterPrice LIMIT 0, 2" );

	while( $row = mysqli_fetch_array( $result ) ) {
		echo '<div class="col-12 col-6-sm col-4-lg col-3-xl">
					<div class="card-list__item">
						<div class="card-list-item__image" style="background-image: url(images/content/'.$row["sitterImage"].'.jpg);"></div>

						<div class="card-list-item__main">
							<p class="text text--sm text--border text--mb-xs">'.$row["sitterLocation"].'</p>

							<h5 class="title title--md title--mb-xs">'.$row["sitterFullName"].'</h5>

							<p class="text text--md text--orange">$'.$row["sitterPrice"].'<span class="text text--md"> /day</span></p>
						</div>

						<div class="card-list-item__footer">
							<p class="text text--sm">'.$row["sitterService"].'</p>
						</div>

						<a href="#rent-pop-up" class="button button--xl button--filled js-popup-form" data-sitterEmail="'.$row["sitterEmail"].'" data-sitterFullName="'.$row["sitterFullName"].'" data-sitterPrice="'.$row["sitterPrice"].'" data-sitterLocation="'.$row["sitterLocation"].'" data-sitterService="'.$row["sitterService"].'"  data-sitterPrice="'.$row["sitterPrice"].'" data-sitterImage="'.$row["sitterImage"].'" data-sitterPreferedPet="'.$row["sitterPreferedPet"].'">Meet up</a>
					</div>
				</div>';
	}

	$con->close();
?>
