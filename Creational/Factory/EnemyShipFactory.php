<?php
// This is a factory thats only job is creating ships
// By encapsulating ship creation, we only have one
// place to make modifications

require_once "BigUFOEnemyShip.php";
require_once "RocketEnemyShip.php";
require_once "UFOEnemyShip.php";

class EnemyShipFactory
{
	// This could be used as a static method if we
	// are willing to give up subclassing it
	
	public function makeEnemyShip($newShipType){
		if ($newShipType == "U"){
			return new UFOEnemyShip();
		} else if ($newShipType == "R"){
			return new RocketEnemyShip();
		} else  if ($newShipType == "B"){
			return new BigUFOEnemyShip();
		} else {
			return null;
		}
	}
}