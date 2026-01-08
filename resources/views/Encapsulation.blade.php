<?php
class het
{
private $balance = 10000;
 function getvlaue()
 {
    return $this->balance;
 }
 function drawble($amoute)
 {
    if($amoute > 0 && $amoute <= $this -> balance)
    {
       $this->balance -= $amoute;
    }
 }
}
$obj = new het();
$obj->drawble(700); 
echo $obj->getvlaue();
