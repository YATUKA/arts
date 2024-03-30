<?php
if (isset($_POST["name"]) && !empty($_POST["name"])) {
$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z ]*$/",$name))
echo "Name: Only letters and whitespace allowed";
else
echo "Name: ".$_POST["name"]."";
}
if (isset($_POST["email"]) && !empty($_POST["email"])) {
echo "E-Mail: ".$_POST["email"]."";
}
if (isset($_POST["age"]) &&!empty($_POST["age"])) {
    echo "Age: ".$_POST["age"]."";
}
if (isset($_POST["gender"]) && !empty($_POST["gender"])) {
echo "Gender: ".$_POST["gender"];
}
?>