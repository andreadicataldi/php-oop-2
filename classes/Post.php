<?php

include_once __DIR__ . '/User.php';

class Post extends User
{
  public $title;
  public $content;


  public function __construct(string $username, string $password, string $email)
  {
    parent::__construct($username, $password, $email);
  }
}
