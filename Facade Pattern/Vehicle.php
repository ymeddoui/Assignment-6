<?php

class Vehicle
{
	public function __construct($str)
	{
		$this->str = $str;
		$this->_AddModel();
		$this->_AddColour();
		$this->_AddSpecs(new Spec);
		echo $this->str;
	}
	
	private function _AddModel()
	{
		$this->str .= ' - GTR'; 
	}
	
	private function _AddColour()
	{
		$this->str .= ' - Orange';
	}
	
	private function _AddSpecs(Spec $spec)
	{
		$this->str .= $spec->vehicleSpec();
	}
}
