<?php

require_once "Duck.php";

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Decoy duck<br>";
    }
}