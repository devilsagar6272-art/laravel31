<?php
/*trait sagar1
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
    echo "1243567890";+
  }
}
class het{
  use sagar1,geeta;
}
class het1 extends het
{
      
}
$obj = new het1('a');
$obj->one();*/
/*class Name
{
  public $value;
  function __construct(string $value)
  {
     $this->value = $value;   
  }
}
abstract class sagar1{
  public Name $name;
  function __construct(Name $name)
  {
     $this->name = $name;
  }
    abstract function intro();
} 
class geeta extends sagar1
{
  function intro()
  {
    echo $this->name->value;
  }
} 
$name = new Name('sagar');
$obj = new geeta($name);
$obj->intro();*/
/*class animal
{
  public function sound()
  {
    echo "sound";
  }
}
class dog extends animal
{
  function sound()
  {
   echo "perk";  
  } 
}
class cat extends animal
{
  function sound()
  {
    echo "meow";
  }
}
$objs = [new dog(),new cat()];
 foreach($objs as $obj)
 {
  echo $obj->sound();
  }*/
/*class sagar1
{
  private $balance = 10000; 
  function getvalue()
  {
     return $this->balance;
  }
  function draw($amoute)
  {
  if($amoute > 0 && $amoute <= $this->balance)
    {
      $this->balance -= $amoute;  
    }  
  }
}  
$obj = new sagar1();
$obj->draw(700);
echo $obj->getvalue();*/
/*interface game
{
  public function name();
}
interface mega
{
  public function mega();
}

class sagar1 implements game,mega
{
  function name()
  {
     echo "sagar";
  }
  function mega()
  {
    echo "mega";
  } 
}
$obj = new sagar1();
$obj->name();
$obj->mega();*/
class Name
{
  public $value;
  function __construct($value)
  {
    $this ->value = $value;
  }
}
class sagar1
{
   protected Name $name;
  function __construct(Name $name)
  {
    $this->name = $name;
  }
  function intro()
  {
    echo $this->name->value;
  }
}
$objs = new Name('sagar');
$obj = new sagar1($objs);
echo $obj->intro();