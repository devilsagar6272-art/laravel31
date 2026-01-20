<form>
<input type="text" id="sagar">
<input type="text" id="sagararar">
<input type="sumbit">
</form>
<?php
/*class het
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
echo $obj->getvlaue();*/
/*class name 
{
   function show()
   {
      echo 1;
   }
}
$obj = new sagar();
$obj->show();
$user = usermodel::create({
 'name'=>$request->name,
 'email'=>$request->email
});*/
for($a=1;$a < 10 ; $a++)
   {
      for($b=10; $b > $a; $b--)
      {
      echo "&nbsp;&nbsp";
      }
      for($c=1;$c<=(2*$a-1);$c++)
         {
            echo  "*";
         }
      echo "<br>";
   }
   for($a=10;$a > 1 ; $a--)
   {
      for($b=10; $b > $a; $b--)
      {
      echo "&nbsp;&nbsp";
      }
      for($c=1;$c<=(2*$a-1);$c++)
         {
            echo  "*";
         }
      echo "<br>";
   }
?>
<script>
   $(function(){
     $.ajaxSetup({
      headers:{
      "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')
      }
     }); 
   });
   name = $('#sagaeee').val();
   email = $('#sagar').val();
   $('#submit').click(function(e){
   e.preventDefualt();
   $.ajax({
      url:'/insert',
      data:name:name,email:email,
      type:'POST',
      success:function()
      {
       $('#message').text('text');
      }, 
      error:function()
      {  
      $("#message").text('text');
      }
   }); 
   });
</script>



