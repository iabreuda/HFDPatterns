<?php

require_once "EnemyShip.php";

class UFOEnemyShip extends EnemyShip {
	
	public function __construct(){
		$this->setName("UFO Enemy Ship");
		$this->setDamage(20.0);
	}
}
