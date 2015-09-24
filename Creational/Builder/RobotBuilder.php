<?php
// Defines the methods needed for creating parts 
// for the robot

interface RobotBuilder {
	
	public function buildRobotHead();
	
	public function buildRobotTorso();
	
	public function buildRobotArms();
	
	public function buildRobotLegs();
	
	public function getRobot();
}
