<?php

class HumanPrototype
{
    protected $name;

    protected $gender;

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
