<?php


class Cow 
{
  private string $msg;

  public function __construct($msg)
  {
    $this->msg = $msg;
  }

  public function say(): string
  {
    return $this->msg;
  }
}