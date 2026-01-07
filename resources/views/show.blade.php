<?php
/*trait geeta
{
 function mansi()
 {
  echo 1;
 }
}
class het{
  use geeta;
} 
$obj = new het();
$obj->mansi(); 
abstract class show{
  public $name;
  function __construct($name)
  {
    $this->name = $name;
  }  
    abstract public function sagar();
}

class het extends show
{
  function sagar() 
  {
    for($a=1;$a<=10;$a++)
    {
      for($b=10; $b>$a;$b--)
      {
        echo "&nbsp;&nbsp;";
      }
      for($c=1;$c <=(2*$a-1);$c++)
      {
        echo "*";    
      }
     echo "<br>";
    }
    for($a=10;$a>=1;$a--)
    {
      for($b=10; $b>=$a;$b--)
      {
        echo "&nbsp;&nbsp;";
      }
      for($c=1;$c <=(2*$a-1);$c++)
      {
        echo "*";    
      }
     echo "<br>";
    }
  } 
} 
$obj = new het('sagar');
$obj->sagar();
class animal
{
  function sound()
  {
    echo "animal sound";
  }
}
//polymerphisen
class dog extends animal
{
  function sound()
  {
        echo "meow";
  }
}
class cat extends animal
{
  function sound()
  {    
    echo "park";
  }
}
$objs = [new dog(),new cat()];
foreach($objs as $obj)
{
  $obj->sound();
}*/
class hatvi 
{
  private $sagar;
  function setvalue($sagar)
  {
    $this->sagar = $sagar;
  }
  function getvalue()
  {
    return $this->sagar;
  }
}
$obj = new hatvi();
$obj->setvalue('safagfddfgdff');
echo $obj->getvalue(); 