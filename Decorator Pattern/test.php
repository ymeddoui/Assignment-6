<?php
require_once 'StringRead.php';
require_once 'DecoStr.php';
require_once 'UpperCaseDeco.php';

class test
{
	public static function main()
	{
		$strRead = new StringRead('Hello World');
		$deco = new DecoStr($strRead);
		print $deco->display().'<br />';
		$upperCase = new UpperCaseDeco($deco);
		print $deco->display();
	}
}

?>