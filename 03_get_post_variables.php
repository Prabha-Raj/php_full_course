<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gat & post Variables</title>
</head>
<body>
    <form action="03_get_post_variables.php" method="post">
        <label for="">User Name :</label><br>
        <input type="text" name="username"><br>
        <label for="">Password :</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In"><br>
    </form>
</body>
</html>

<?php

// echo $_GET["username"];
// echo $_GET["password"];

$username = $_POST["username"];
$password = $_POST["password"];
echo "User Name : &nbsp; {$username} .<br>";
echo "Password : &nbsp; {$password} .<br>";

?>