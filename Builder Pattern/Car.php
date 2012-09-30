<?php


class Car
{
	private $Make;
	private $Model;
	private $Colour;
	
	public function carMake($Make)
	{
		$this->Make = $Make;
	}
	
	public function carModel($Model)
	{
		$this->Model = $Model;
	}
	
	public function carColour($Colour)
	{
		$this->Colour = $Colour;
	}
	
	public function printCar() 
	{
		print 'Make: '.$this->Make.'<br />';
		print 'Model: '.$this->Model.'<br />';
		print 'Colour: '.$this->Colour.'<br />';
		
	}
	
}
