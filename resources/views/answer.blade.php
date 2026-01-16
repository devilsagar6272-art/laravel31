<?php
$c = 11;
$a = '9';
$b = 18; 
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
$status = ($name < 10) ? "false" : "true";
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
class yyy
{
  private $amout;
    function __construct($amoute)
    {
       $this->amoute = $amoute;
    }
    function get_value($value)
    {
      $this->amoute -= $value;
      return $this->amoute;
    }
}
$obj = new yyy(5000);
echo  $obj->get_value(800);
if($a < 10)
{
echo '<!DOCTYPE html>
<html>
<head>
  <title>Enter Open Modal</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.s5);
        }
        .modal-content {
            background: white;
            padding: 20px;
            width: 300px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <h3>Press Enter to open modal</h3>
    <input type="text" placeholder="Press Enter here">
    <div class="modal" id="myModal">
        <div class="modal-content">
            <p>Modal Opened</p>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>
    <script>
        document.addEventListener("keydown", function(event) 
        {
            if (event.key === "Enter") 
            {
                document.getElementById("myModal").style.display = "block";
            }
        });
        function closeModal() 
        {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>';
}
$name = 101010.10;
$status = ($name < 10 ) ? "false":"true";
echo $status;
var_dump($name);
trait jit
{
  public function hit()
  {
    echo "rettret";
  }
}
class we 
{
     use jit;
}
$neet = new we();
$neet->hit();
?>
<script>
  $(function(){
   $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN':$('meta(name="csrf-token")').attr('content')
    }
   });
  });
</script>