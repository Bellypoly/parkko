<?php

function calculate_charge(){

	date_default_timezone_set('Asia/Bangkok');

	$start_time = new DateTime('2015-08-26 19:00:00');
	$stop_time = new DateTime();
	$diff = $start_time->diff($stop_time);
	
	$park_hours = $diff->h;
	$park_minutes = $diff->i;

	$park_hours = $diff->h;
	$park_minutes = $diff->i;

	$total_charge = 0;

	if ($park_minutes > 0){
		$park_hours = $park_hours + 1;
	};

	//------------------------

	// for ($x=1; $x <= $park_hours; $x++){

	// 	if ($x = 1){
	// 		$current_charge = 0;
	// 	} else if ($x >= 1 && $x <= 3) {
	// 		if ($x = 1){
	// 			$current_charge = 10;
	// 		}
	// 	} else {

	// 		$current_charge = 20;
	// 		// $current_hour = $start_time->format('H');
	// 		// if ($current_hour >= '2' && $current_hour <= '6'){
	// 		// 	$current_charge = 250;
	// 		// } else {
	// 		// 	$current_charge = 20;
	// 		// }
	// 	}

	// 	$total_charge = $total_charge + $current_charge;
	// 	// $start_time->add(new DateInterval('PT1H'));

	// }


	// //-----------------------
	// echo $total_charge;

	return '2690';

}

echo calculate_charge();

