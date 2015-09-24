<?php
// The director / engineer class creates a Robot using the
// builder interface that is defined (OldRobotBuilder)

require_once "RobotBuilder.php";

class RobotEngineer {
	
	private $robotBuilder;
	
	// OldRobotBuilder specification is sent to the engineer
	
	public function __construct(RobotBuilder $robotBuilder)
	{
		$this->robotBuilder = $robotBuilder;
	}
	
	// Return the Robot made from the OldRobotBuilder spec
	
	public function getRobot()
	{
		return $this->robotBuilder->getRobot();
	}
	
	// Execute the methods specific to the RobotBuilder 
	// that implements RobotBuilder (OldRobotBuilder)
	
	public function makeRobot() 
	{
		$this->robotBuilder->buildRobotHead();
		$this->robotBuilder->buildRobotTorso();
		$this->robotBuilder->buildRobotArms();
		$this->robotBuilder->buildRobotLegs();
	}
}
