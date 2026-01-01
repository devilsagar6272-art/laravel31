<?php
class sagar
{
  public function index()
  {
    echo "wowowowowowow";
  }
}
class user extends sagar
{
  public function index()
  {
    echo "give me give me";
  }
}
$obj = new user();
$obj1 = new sagar();
$obj->index();
$obj1->index();