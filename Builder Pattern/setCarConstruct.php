<?php

class setCarConstruct extends carConstruct
{

	public function setMake()
	{
		$this->pCar->carMake('Nissan');
	}
	
	public function setModel()
	{
		$this->pCar->carModel('GTR');
	}
	
	public function setColour()
	{
		$this->pCar->carColour('Orange');
	}

}

?>