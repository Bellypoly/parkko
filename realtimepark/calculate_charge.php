<?php

function calculate_charge($total_hours=0, $discount_type=0){

	$park_hours = 5;
	$discount_type = 5000;
	$free_hour = 3;
	$fee_per_hour = 10;
	$free_hour = 1;

	$total_hours = 0;
	$total_charge = 0;

	$park_hours - $free_hour = $total_hours;

	if ($discount_type == 5000){
		$total_hours = $total_hours - 3;
	}elseif ($discount_type == 10000){
		$total_hours = $total_hours - 6;
	}

	if ($total_hours <= 0){
		$total_charge = 0;
	} else {


		$total_hours = 1;

		for ($x=1; $x<=$total_hours; $x++) {
			
			if ($x <= 3){
				//10 baht per hour
				$total_charge = $total_charge + 10;
			} elseif ($x > 3) {
				//20 baht per hour
				$total_charge = $total_charge + 20;
			}


		}
	}

	echo $total_charge.' Bahts';

}

calculate_charge();