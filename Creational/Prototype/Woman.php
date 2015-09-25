<?php

require_once "Human.php";
require_once "HumanPrototype.php";

class Woman extends HumanPrototype implements Human
{
    public function __construct()
    {
        $this->gender = "Woman";
    }

    public function __clone()
    {

    }
}
