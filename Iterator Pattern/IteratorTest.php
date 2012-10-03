 <?php
 
require_once 'MinMax.php';

class IteratorTest
{
	public static function main()
	{
		$minmax = new MinMax(2, 6);

		foreach ($minmax as $v)  // calls $minmax->getIterator and then iterates over the result
		{
			print $v . "\n";
		}
	}
 }