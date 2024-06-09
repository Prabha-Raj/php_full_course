<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Traller Rajput </title>
</head>
<body>
    <form action="05_get_post_variables.php" method="post">
        <label for="">Enter Employee Name : </label><br>
        <input type="text" name="name"><br>
        <label for="">Enter Employee Mobile Number :</label><br>
        <input type="number" name="number" id=""><br>
        <label for="">Enter Employee Email :</label><br>
        <input type="email" name="email" id=""><br>
        <label for="">Enter Employee Address :</label><br>
        <textarea name="address" id="" cols="40" rows="5"></textarea><br>
        <input type="submit" value="Submit"><br><br><br>

    </form>
</body>
</html>

<?php
$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$address = $_POST["address"];

echo "Employee Name : {$name} .<br>";
echo "Employee Mobile : {$number} .<br>";
echo "Employee Email : {$email} .<br>";
echo "Employee Address : {$address} .<br>";

?>