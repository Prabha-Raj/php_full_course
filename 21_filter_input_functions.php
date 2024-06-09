

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login  system</title>
</head>
<body>
    <form action="21_filter_input_functions.php" method="post">
        <label for="">username : </label>&nbsp;&nbsp;
        <input type="text" name="name"><br><br>
        <label for="">Age : </label>&nbsp;&nbsp;
        <input type="text" name="age"><br><br>
        <label for="">Email : </label>&nbsp;&nbsp;
        <input type="text" name="email"><br><br>
        <input type="submit" value="Login" name="login"><br><br>
    </form>
</body>
</html>


<?php
// $username = "";
if(isset($_POST["login"])){
    // $username = $_POST["name"];
    $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Name : &nbsp; {$username} <br>";
    echo "Name are {$age} years old .<br>";
    echo "Your Email is : &nbsp; {$email} .<br>";
}



?>




