<?php

class Comment
{
  public $post_id;
  public $content;
  public $status;
  public $create_time;
  public $author;
  public $email;
  public $url;

  public function __construct($post_id, $content, $status, $create_time, $author, $email, $url)
  {
    $this->post_id = $post_id;
    $this->content = $content;
    $this->status = $status;
    $this->create_time = $create_time;
    $this->author = $author;
    $this->email = $email;
    $this->url = $url;
  }
}
