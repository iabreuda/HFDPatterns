<?php

require_once "QuackBehavior.php";

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak<br>";
    }
}