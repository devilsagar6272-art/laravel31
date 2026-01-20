<?php
$n = 21;
if($n >10)
{
  echo "how to create";
}
if($n > 20)
{
  echo "rtjjiorjtr";
}
else
{ 
 echo "insert";
}
if($n > 10)
{
  echo "ledder";     
} 
elseif($n > 10)
{
  echo "ledder";  
} 
else
{
  echo "ledder if";
}
if($n > 10)
  {
    echo "nested";
    if($n >20)
      {
       echo "two nested";
      }
  }
  $a = 000;
switch($a)
{
case 11:
  echo "elevent";
  break;
  case 10:
    echo "ten";
    break;
 default:
 echo "no one there";
}
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<button id='submit'>submit</button>
<input id='search'/>
<p id="p">sdfghj</p>
<div id="box">Hover me</div>
<div id="tooltip" style="display:none; position:absolute;">Tooltip text</div>
<script>
  $(function(){
   $('#submit').submit(function ()
   {
    $('#p').show();
   });  
    $('#submit').dblclick(function (){
      $('#p').hide();
   });
   $('#search').on('input',function()
  {
    let value = $(this).val();
    console.log(value);
  });
  });
  $('#box').mouseenter(function () {
  $('#tooltip').show();
});
$('#box').mousemove(function (e) {
    $('#tooltip').css({
        top: e.pageY + 10,
        left: e.pageX + 10
    });
});
$('#box').mouseleave(function() {
    $('#tooltip').hide();
});
</script>
