<?php
// The concrete builder class that assembles the parts 
// of the finished Robot object

require_once "RobotBuilder.php";
require_once "Robot.php";

class OldRobotBuilder implements RobotBuilder {

	private $robot;
	
	public function __construct() 
	{
		$this->robot = new Robot();
	}
	
	public function buildRobotHead() 
	{
		$this->robot->setRobotHead("Tin Head");
	}

	public function buildRobotTorso() 
	{
		$this->robot->setRobotTorso("Tin Torso");
	}

	public function buildRobotArms() 
	{
		$this->robot->setRobotArms("Blowtorch Arms");
	}

	public function buildRobotLegs() 
	{
		$this->robot->setRobotLegs("Rollar Skates");
	}

	public function getRobot() 
	{
		return $this->robot;
	}
}
