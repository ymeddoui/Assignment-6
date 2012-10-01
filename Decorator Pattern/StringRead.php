<?php

class StringRead
{
	protected $str;
	
	function __construct($str)
	{
		$this->str = $str;
	}
	
	function display()
	{
		return $this->str;
	}
}