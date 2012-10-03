<?php
require_once 'MinMaxIterator.php';


class MinMax implements IteratorAggregate
 {
	protected $min, $max;

	public function __construct($min, $max)
	{
		$this->min = $min;
		$this->max = $max;
	}

	public function getIterator()
	{
		// creates an external iterator, called from foreach
		return new MinMaxIterator($this->min, $this->max);
	}
 }