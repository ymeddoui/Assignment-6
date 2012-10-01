<?php

require_once 'DecoStr.php';

class UpperCaseDeco extends DecoStr
{
	private $decoStr;
	
	function __construct(DecoStr $decoStr)
	{
		$this->decoStr = $decoStr;
		$this->upperCaseDeco();
	}
	
	function upperCaseDeco()
	{
		$this->decoStr->str = strtoupper($this->decoStr->str);
	}
}