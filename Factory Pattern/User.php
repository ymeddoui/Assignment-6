<?php

require_once 'IUser.php';

class User implements IUser
{
  public function __construct( $id ) { }
 
  public function getName()
  {
    return "Youssef";
  }
}