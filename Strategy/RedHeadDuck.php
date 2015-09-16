<?php

require_once "Duck.php";

class RedHeadDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a real Red Head duck<br>";
    }
}