<?php
/*abstract class sagagag1
{
    abstract public function pay();
    public function payment()
    {
        echo "success";
    }
}
class het extends sagagag1
{
    public $amoute;
    public function __construct($amoute)
    {
       $this->amoute = $amoute;
    } 
    public function pay()
    {
        echo $this->amoute;
    }
}
$obj = new het(1111111500);
$obj->pay();*/
interface gautam
{
  public function geeta();
}
interface bansi
{ 
  public function getc();
}
class het implements gautam,bansi
{
    public function geeta()
    {
      echo "hethuetgagjfd";
    }
    public function getc()
    {
      echo "dfjsksjdfkjsdjskj";
    }
}
$obj = new het();
$obj->getc();
$obj->geeta();