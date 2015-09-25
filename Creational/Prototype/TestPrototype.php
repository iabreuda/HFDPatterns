<?php

require_once "Man.php";
require_once "Woman.php";

echo "BEGIN OF TEST<br/><br/>";

$man = new Man();
$woman = new Woman();

$igor = clone $man;
$igor->setName("Igor");
echo 'Gender = ' . $igor->getGender() . " and Name = " . $igor->getName(). "<br/><br/>";

$eliezer = clone $man;
$eliezer->setName("Eliezer");
echo 'Gender = ' . $eliezer->getGender() . " and Name = " . $eliezer->getName(). "<br/><br/>";

$eliane = clone $woman;
$eliane->setName("Eliane");
echo 'Gender = ' . $eliane->getGender() . " and Name = " . $eliane->getName(). "<br/><br/>";

$arianne = clone $woman;
$arianne->setName("Arianne");
echo 'Gender = ' . $arianne->getGender() . " and Name = " . $arianne->getName(). "<br/><br/>";
