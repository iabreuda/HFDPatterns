<?php

require_once "FlyNoWay.php";
require_once "FlyWithWings.php";
require_once "Quack.php";
require_once "MuteQuack.php";
require_once "Squeak.php";

abstract class Duck
{
    public $flyBehavior;

    public $quackBehavior;

    abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swin()
    {
        echo "All ducks float, even decoys!<br>";
    }
}