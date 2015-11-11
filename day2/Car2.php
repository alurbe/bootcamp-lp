<?php

class Car
{


public $name = 'Car';
public $speed = '120';
public $canFly = 'It can not Fly';
public $maxPassengers = '5';



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
