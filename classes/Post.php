<?php

class Post
{
  public $user_id;
  public $content;
  public $tags;
  public $status;
  public $create_time;
  public $update_time;

  public function __construct($user_id, $content, $tags, $status, $create_time, $update_time)
  {
    $this->user_id = $user_id;
    $this->content = $content;
    $this->tags = $tags;
    $this->status = $status;
    $this->create_time = $create_time;
    $this->update_time = $update_time;
  }
}
