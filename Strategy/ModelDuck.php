<?php

require_once "Duck.php";

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quackable();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a mode duck<br>";
    }
}