<?php

function calculate_charge(){

	date_default_timezone_set('Asia/Bangkok');

	$start_time = new DateTime('2015-08-26 19:00:00');
	$stop_time = new DateTime('2015-08-28 15:00:00');
	$diff = $start_time->diff($stop_time);
	
	$park_days = $diff->format('%a');
	$park_hours = $diff->format('%h');
	// $park_minutes = $diff->i;

	$park_hours = (int)$park_days*24 + (int)$diff->h;
	$park_minutes = $diff->i;
	$total_charge = 0;

	if ($park_minutes > 0){
		$park_hours = $park_hours + 1;
	};

	//------------------------

	for ($x=1; $x <= $park_hours; $x++){

		if ($x == 1){
			$current_charge = 0;
		} else if ($x >= 2 && $x <= 4) {
			if ($x == 2){
				$current_charge = 10;
			} else {
				$current_charge = 0;
			}
		} else {
			$current_hour = $start_time->format('H');
			if ((int)$current_hour > 2 && (int)$current_hour <= 6){
				$current_charge = 250;
			} else {
				$current_charge = 20;
			}
		}

		$total_charge = $total_charge + $current_charge;
		$start_time->add(new DateInterval('PT1H'));

	}

	// //-----------------------
	return $total_charge;

}
