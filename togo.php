<?php 
$x = 0;
$b = 0;
$c = $b + $x;

switch ($c)
{
    case 0:
        echo "Number 1<br>";
        break;
    case 2:
        echo "Number 2";
        break;
    case 7:
        echo "Number 3";
        break;
    default:
   echo "No number between 1 and 3<br>";
   }
   function add($x,$y)
   {
   $total = $x + $y;
   return $total;
   }
  echo "1 + 96 = " . add(1,96);
     
function caleb($name){
    echo "<br>HELLO THUG, ".$name;
}
$age = 48;
if ($age < 20) {
echo "You are a teenager";
}
else {
    echo "YOU NOT<br>";
}
for ($i=0; $i < 5; $i++) {
    echo "This is loop number $i";
    }
    $frank = array("<br>Frank is a web developer!", "<br>Frank is a android developer1", "<br>Frank is a Graphic Designer!");
    echo "Know ME!" .$frank[0];
    echo "<br>Know ME!" .$frank[2];
    function nyatuka(){
        echo "<br>NYATUKA IS A THUG DEVELOPER!";
    } 
    nyatuka();
    caleb("NYATUKA");
   
?>
