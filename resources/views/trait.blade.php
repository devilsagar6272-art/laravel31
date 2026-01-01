<?php
trait sagar1
{
  public $a;
  function __construct($a)
  {
     $this->a = $a; 
  } 
  function __destruct()
  {
    echo $this->a;
  }
}
trait geeta
{
  function one()
  {
    echo "1243567890";
  }
}
class het{
  use sagar1,geeta;
}
class het1 extends het
{
      
}
$obj = new het1('a');
$obj->one();
