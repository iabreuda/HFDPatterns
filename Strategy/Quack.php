<?php

require_once "QuackBehavior.php";

class Quackable implements QuackBehavior
{
    public function quack()
    {
        echo "Quack<br>";
    }
}