<?php
// This is the interface that will be returned from the builder

interface RobotPlan
{
	public function setRobotHead($head);
	
	public function setRobotTorso($torso);
	
	public function setRobotArms($arms);
	
	public function setRobotLegs($legs);
}
