<?php

require_once 'saleRep.php';
require_once 'setCarConstruct.php';

class carProducer
{

	public static function main()
	{
	
		$sRep = new saleRep();
		$sCarConstruct = new setCarConstruct();
		
		$sRep->setCarBuilder($sCarConstruct);
		$sRep->createCar();
		
		$pCar = $sRep->getCar();
		$pCar->printCar();
		
	}

}

?>