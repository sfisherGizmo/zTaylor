<?php

class GasCar{

	public $fuel;
	public $total = 13; // gallons 
	public $is_moving;

	public function __construct( $fuel ) {
		
		return $this->fuel = $fuel;
	}

	public function refuel( $car ) {
		
		$fuel_left = $this->FuelLevel( ( int ) $car );
		if ( $fuel_left == $this->total ) {
			echo "You are already fully fueled";
			die();
		}
		
		do {
			$percent_to_full = round( $fuel_left / $this->total, 2 ) * 100;
			echo 'You are ' . $percent_to_full . '% full' . "\r\n";
			$fuel_left ++;

		} while ( $fuel_left <= $this->total );

		if ( $fuel_left === $this->total ) {
			return;
		}
	}

	public function FuelLevel( $car ) {

		return $this->fuel;
	}

	public function drive() {
		
		return $this->is_moving = true; 
	}

	public function stop( $car ) {

		return $this->is_moving = false;
	}
}

class ElectricCar{

	public $energy;
	public $total = 60; // mins till full
	public $is_moving;

	public function __construct( $energy ) {
		$this->energy = $energy;
	}

	public function recharge( $car ) {
		
		$energy_left = $this->FuelLevel( ( int ) $car );

		if ( $energy_left == $this->total ) {
			echo "You are already fully charged";
			die();
		}

		do {
			$percent_to_full = round( $energy_left / $this->total ) * 100;
			echo 'You are ' . $percent_to_full . '% full' . "\r\n";
			$energy_left ++;

		} while ( $energy_left <= $this->total );

		if ( $energy_left === $this->total ) {
			return;
		} 
		
	}

	public function  FuelLevel( $car ) {
		
		return $this->energy;
	}

	public function drive() {

		return $this->is_moving = true;
	}

	public function stop( $car ) {

		return $this->is_moving = false;
	}
}



?>
