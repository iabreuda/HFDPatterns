<?php

require_once "Human.php";
require_once "HumanPrototype.php";

class Man extends HumanPrototype implements Human
{
    public function __construct()
    {
        $this->gender = "Man";
    }

    public function __clone()
    {

    }
}
