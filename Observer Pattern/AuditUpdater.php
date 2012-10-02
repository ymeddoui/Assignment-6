<?php

require_once 'IObserver.php';

class AuditUpdater implements IObserver 
{
    
    public function onChanged( $sender, $args ) 
	{
        echo( "'$args' notified the  AuditUpdater <br>" );        
    }
}