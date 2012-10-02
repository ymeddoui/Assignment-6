<?php

require_once 'IObserver.php';


class UserListUpdater implements IObserver 
{        
    
    public function onChanged( $sender, $args ) 
	{
        echo( "'$args' notified the  UserListUpdater <br>" );            
    }
}