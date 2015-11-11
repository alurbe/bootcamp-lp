<?php

class Bike
{


public $name = 'Bike';
public $speed = '25';
public $canFly = 'It can not Fly';
public $maxPassengers = '2';



public function speed() {
  return $this->speed;

}

public function canFly() {
  return $this->canFly;
}

public function maxPassengers() {
  return $this->maxPassengers;
}
public function getname() {
  return $this->name;
}
}


 ?>
