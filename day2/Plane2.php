<?php

class Plane
{


public $name = 'Plane';
public $speed = '800';
public $canFly = 'It can Fly';
public $maxPassengers = '500';



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
