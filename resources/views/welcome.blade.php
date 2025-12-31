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
  public function get();   
}
interface bansi
{
    public function getc();   
}
class AsClass  implements gautam,bansi
{
  public function get()
  {
    echo 1;
  }    
  public function getc()
  {
    echo 2;
  }
}
$obj = new AsClass();
$obj->get();
$obj->getc();