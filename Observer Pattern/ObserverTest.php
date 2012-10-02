<?php

require_once 'UserList.php';
require_once 'UserListUpdater.php';
require_once 'AuditUpdater.php';

class ObserverTest
{
	public static function main()
	{
		$ul = new UserList();
		$ul->addObserver(new UserListUpdater() );
		$ul->addObserver(new AuditUpdater() );

		$ul->addCustomer("Youssef" );
		$ul->addCustomer("Meddoui" );
	}
}