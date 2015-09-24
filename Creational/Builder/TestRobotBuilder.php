<?php

require_once "OldRobotBuilder.php";
require_once "RobotEngineer.php";

class TestRobotBuilder 
{
	public function __construct()
	{
		$oldStyleRobot = new OldRobotBuilder();
		$robotEngineer = new RobotEngineer($oldStyleRobot);
		$robotEngineer->makeRobot();
		$firstRobot = $robotEngineer->getRobot();

		print("Robot Built<br/><br/>");
		print("<br/>Robot Head Type: " . $firstRobot->getRobotHead());
		print("<br/>Robot Torso Type: " . $firstRobot->getRobotTorso());
		print("<br/>Robot Arm Type: " . $firstRobot->getRobotArms());
		print("<br/>Robot Leg Type: " . $firstRobot->getRobotLegs());		
	}
}

$test = new TestRobotBuilder();
