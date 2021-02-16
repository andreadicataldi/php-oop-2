<?php

class User
{
  public $id;
  public $username;
  public $password;
  public $email;

  public function __construct($username, $password, $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
  }
}

$users = [
  new User('MarkZuckerberg', 'UnP3NeTr4bL3', 'imceobitch@facebook.com'),
  new User('ElonMusk', 'OverpricedCars', 'elon@tesla.com'),
  new User('BillGates', 'YouDontWantToKnow', 'bill.gates@microsoft.com'),
  new User('PopeFrancis', 'OraEtLabora', 'franciscus@holysee.va'),
];
