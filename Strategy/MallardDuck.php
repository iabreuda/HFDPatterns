<?php

require_once "Duck.php";

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quackable();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Mallard duck<br>";
    }
}