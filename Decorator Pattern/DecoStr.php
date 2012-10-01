<?php

require_once 'StringRead.php';

class DecoStr extends StringRead
{
	protected $str;
	protected $strRead;
	
	function __construct(StringRead $strRead)
	{
		$this->stringRead = $strRead;
		$this->str = $this->stringRead->display();
	}
	
	function display()
	{
		return $this->str;
	}
}