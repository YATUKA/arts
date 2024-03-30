<!DOCTYPE html>
<header></header>
<body>
<?php echo $_POST["b"];
echo date("<br>Y.m.d");
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);
?></body></html>