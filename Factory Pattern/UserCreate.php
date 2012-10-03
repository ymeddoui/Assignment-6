<?php

require_once 'User.php';

class UserCreate
{
  public function Create( $id )
  {
    return new User( $id );
  }
}