<?php

require_once 'CarConstruct.php';

class saleRep
{

	private $setCarBuilder;
	
	public function setCarBuilder(carConstruct $sCarBuilder)
	{
		$this->sCarBuilder = $sCarBuilder;
	}
	
	public function getCar()
	{
		return $this->sCarBuilder->getCar();
	}
	
	public function createCar()
	{
		$this->sCarBuilder->newCar();
		$this->sCarBuilder->setMake();
		$this->sCarBuilder->setModel();
		$this->sCarBuilder->setColour();
	}

}

?>