<?php

require_once 'Car.php';

abstract class carConstruct
{
	protected $pCar;
	
	public function getCar()
	{
		return $this->pCar;
	}
	
	public function newCar()
	{
	$this->pCar = new Car();
	}
	
	public abstract function setMake();
	public abstract function setModel();
	public abstract function setColour();
}

?>