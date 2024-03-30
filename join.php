<?php
include "header.php";
?>
<html>
<head>
    <title>JOIN US</title>
</head>
<body>
    <h1>MAKAVELI THUGS</h1>
    <form method="post" action="wcg.php">
        <input type="text" name="name" placeholder="NAME"><br>
        <input type="text" name="email" placeholder="E-MAIL"><br>
        <input type="number" name="age" placeholder="AGE"><br>
        <input type="radio" name="gender" value="MALE">MALE
        <input type="radio"name="gender" valeu="FEMALE">FEMALE
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>