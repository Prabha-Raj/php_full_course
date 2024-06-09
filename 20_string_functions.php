
<?php

$username = "Prabhakar Rajput Engineer";


// $username = strtolower($username);
// $username = strtoupper($username);
// $username = str_pad($username, 20, "/");
// $username = strrev($username);
// $username = str_shuffle($username);
// $username = strcmp($username, "Prabhakar Rajput");
// $username = strlen($username);
// $username = strpos($username, " ");

// $username = "       Prabhakar Rajput       ";
// $username = trim($username);
// $username = rtrim($username);
// $username = ltrim($username);

echo "Name : &nbsp;".$username."<br>";


$phone = "863-004-9758";
$index = strpos($phone, "-");
echo "Phone Number : &nbsp;". $phone."<br>";
echo "Hyfun (-) is present index no in phone no: &nbsp;{$index}<br>";
$phone = str_replace("-", "", $phone);
echo "After  Replacing Hyfun(-) Phone Number : &nbsp;". $phone."<br>";


$firstname = substr($username, 0, 9);
$lastname = substr($username, 9);
echo "First Name : &nbsp;".$firstname."<br>";
echo "Last Name : &nbsp;".$lastname."<br>";


$fullname = explode(" ",$username);
echo "Full Name : &nbsp;".$username."<br><br>";
foreach($fullname as $name){
    echo $name . "<br>";
}

$username = array("Er.", "Prabha", "Raj");
$fullname = implode("-",$username);
echo "<br> {$fullname}";

?>