<?php
$c = 11;
$a = '10';
$b = 13; 
if($a === 10)
  {
    echo 1;
  }
if($b != 10)
  {
    class Name
    {
      public $value;
      function __construct($value)
      {
        $this->value = $value;
      }
    }
    abstract class sagar2
    {
     public Name $name;
      function __construct(Name $name)
      {
        $this->name = $name;
      }
      public abstract function fg();
    }
    class sd extends sagar2
    {
      function fg()
      {
        echo $this->name->value;
      }
    }
    $objs = new Name('sds');
    $obj = new sd($objs);
    $obj -> fg();
    echo "check";
  }
if($b += 10)
  {
    echo "less check";
  }
if($c <= 10)
  {
    echo "greth check";
  }
  $name = 8;
$status = ($name < 10) ? "flase" : "true";
echo $status;
interface fg{
  public function name();
}
class dg implements fg{
  public function name()
  {
    echo "q";
  }
}
class ct implements fg{
  public function name()
  {
    echo "q";
  }
}
$c = new dg();
$c->name();
$b = new ct();
$b->name();
trait het 
{
  public function ambaliya()
  {
    echo "1","2","3";
  }
}
class mnasi 
{
  use het;
}
$net = new mnasi();
$net-> ambaliya();