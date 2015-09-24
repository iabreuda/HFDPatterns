<?php

require_once "EnemyShipFactory.php";

class EnemyShipTesting {

	public function __construct()
	{
		$shipFactory = new EnemyShipFactory();

		$theEnemy = $shipFactory->makeEnemyShip("U");
		$this->doStuffEnemy($theEnemy);
		print("---------<br/>");
		$theEnemy = $shipFactory->makeEnemyShip("R");
		$this->doStuffEnemy($theEnemy);
		print("---------<br/>");
		$theEnemy = $shipFactory->makeEnemyShip("B");
		$this->doStuffEnemy($theEnemy);
	}
	
	// Executes methods of the super class
	public function doStuffEnemy(EnemyShip $anEnemyShip){
		$anEnemyShip->displayEnemyShip();
		$anEnemyShip->followHeroShip();
		$anEnemyShip->enemyShipShoots();
	}
}
$simulator = new EnemyShipTesting();

