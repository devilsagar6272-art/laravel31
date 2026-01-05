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
$a=65;
while($a < 69)
{
  $b=65;
  while($b<$a)
  {
    echo chr($b);
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

for($a=65;$a < 69;$a++)
{
    for($b=65;$b < $a;$b++)
    {
        echo chr($b);
    }
    echo "<br>";
}
for($a=1;$a<=10;$a++)
{
    for($b=10;$b>$a;$b--)
    {
       echo "&nbsp;&nbsp;";
    }
    for($c=1;$c<=(2*$a-1);$c++)
    {
      echo $a;
    }
    echo "<br>";
}
for($a=10;$a>=1;$a--)
{
    for($b=10;$b>$a;$b--)
    {
       echo "&nbsp;&nbsp;";
    }
    for($c=1;$c<=(2*$a-1);$c++)
    {
      echo $a;
    }
    echo "<br>";
}
?>
