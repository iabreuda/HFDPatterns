<?php

require_once "FlyNoWay.php";
require_once "FlyWithWings.php";
require_once "FlyRocketPowered.php";
require_once "Quack.php";
require_once "MuteQuack.php";
require_once "Squeak.php";

abstract class Duck
{
    /**
     * Instance of a class that implements FlyBehavior Interface
     *
     * @var object
     */
    public $flyBehavior;


    /**
     * Instance of a class that implements QuackBehavior Interface
     *
     * @var object
     */
    public $quackBehavior;


    /**
     * Abstract method, each child must be write it
     *
     * @return void
     *
     * @abstract
     */
    abstract function display();


    /**
     * Execute fly method from the class instantialized in $this->flyBehavior,
     * fly is defined in each class that implements flyBehavior and each one has
     * a method that describe the type of fly
     *
     * @return void
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }


    /**
     * Execute quack method from the class instantialized in $this->quackBehavior,
     * quack is defined in each class that implements QuackBehavior and each one has
     * a method that describe the type of quack
     *
     * @return void
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }


    /**
     * This method is not used in anywhere but is in the book
     *
     * @return void
     */
    public function swin()
    {
        echo "All ducks float, even decoys!<br>";
    }

    /**
     * Allow change fly behavior in run time
     *
     * @param FlyBehavior $fb instance of a fly behavior interface
     *
     * @return void
     */
    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }


    /**
     * Allow change quack behavior in run time
     *
     * @param QuackBehavior $qb instance of quack behavior interface
     *
     * @return void
     */
    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}
