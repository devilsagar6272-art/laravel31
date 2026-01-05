<?php 
$a = 2;
switch($a)
{
case '1':
    if($a *= 1)
    {
        echo "the value is one";
    }
    break;
case '2':
    echo "the value is two";
    break;
default:
 echo "the end";
}
// forloop
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
$a=1;
while($a < 10)
{
  $b=1;
  while($b<$a)
  {
    echo "x";
    $b++;
  }
    $a++;
 echo "<br>";
}
$rows = 10;
for($i=1;$i<=$rows;$i++)
{
    for($space=$rows;$space> $i;$space--)
    {
        echo "&nbsp;";
    }
    for($star=1;$star <= (2*$i-1);$star++)
    {
        echo "v";
    }
    echo "<br>";
}
?>
