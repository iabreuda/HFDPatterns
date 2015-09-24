<?php
// The concrete Robot class based on the RobotPlan interface

require_once "RobotPlan.php";

class Robot implements RobotPlan{

	private $robotHead;
	private $robotTorso;
	private $robotArms;
	private $robotLegs;
	
	public function setRobotHead($head) 
	{
		$this->robotHead = $head;
	}
	
	public function getRobotHead()
	{ 
		return $this->robotHead; 
	}

	public function setRobotTorso($torso) 
	{
		$this->robotTorso = $torso;
	}
	
	public function getRobotTorso()
	{ 
		return $this->robotTorso; 
	}

	public function setRobotArms($arms) 
	{
		$this->robotArms = $arms;
	}
	
	public function getRobotArms()
	{ 
		return $this->robotArms; 
	}

	public function setRobotLegs($legs) 
	{
		$this->robotLegs = $legs;
	}
	
	public function getRobotLegs()
	{ 
		return $this->robotLegs; 
	}
}
