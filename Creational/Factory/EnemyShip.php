<?php
abstract class EnemyShip 
{
	private $name;

	private $speed;

	private $directionX;

	private $directionY;

	private $amtDamage;
	
	public function getName() 
	{ 
		return $this->name; 
	}

	public function setName($newName) 
	{ 
		$this->name = $newName; 
	}
	
	public function getDamage() 
	{ 
		return $this->amtDamage; 
	}

	public function setDamage($newDamage) 
	{ 
		$this->amtDamage = $newDamage; 
	}
	
	public function followHeroShip()
	{
		print($this->getName() . " is following the hero<br/>");
	}
	
	public function displayEnemyShip()
	{
		print($this->getName() . " is on the screen<br/>");
	}
	
	public function enemyShipShoots() 
	{
		print($this->getName() . " attacks and does " . $this->getDamage() . " damage to hero<br/>");
	}
}
