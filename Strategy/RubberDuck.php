<?php

require_once "Duck.php";

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Squeak();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a real Rubber duck<br>";
    }
}