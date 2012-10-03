 <?php
 class MinMaxIterator implements Iterator
 {
	protected $min, $max;
	protected $pos = 0;

	public function __construct($min, $max)
	{
		// we don't need to initialize pos here because rewind() is responsible for that
		$this->min = $min;
		$this->max = $max;
	}

	public function rewind()
	{
		// restart the looping process
		$this->pos = $this->min;
	}

	public function valid()
	{
		// test for end of loop
		return $this->pos <= $this->max;
	}

	public function key()
	{
		// php iterators are associative, but we don't provide a specialized key here
		return $this->pos;
	}

	public function current()
	{
		// access the current element
		return $this->pos;
	}

	public function next()
	{
		// advance to the next element
		$this->pos++;
	}
 }