<?php

require_once 'IUser.php';
require_once 'User.php';
require_once 'UserCreate.php';

class UserTest
{
	public static function main()
	{
		$uo = UserTest::Create( 1 );
		print( $uo->getName()."\n" );
	}

}