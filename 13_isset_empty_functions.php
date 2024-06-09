<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset & empty functions</title>
</head>
<body>
    <form action="13_isset_empty_functions.php" method="post">
        <lable>Enter Username : &nbsp; &nbsp;</lable>
        <input type="text" name="username"><br><br>
        <label>Enter Password : &nbsp;&nbsp;</label>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Log In" name="Lagin"><br><br>
    </form>    

</body>
</html>

<?php
// isset() == it returns " TRUE " if a variable is declared and (not null), false, true, "" ;.
// empty() == it Returns " TRUE " if a variable is not declared and false, null, "" ;.

// $username = "Prabha Rajput";
// $username = !(null);
$username = $_POST["username"];

// echo isset($username);
if(isset($username)){
    echo "This Variable is set .<br>";
}else{
    echo "This Variable is Not set .<br>";
}

// $password = "Prabha86300";
// $password = !(null);
$password = $_POST["password"];


// echo empty($password);
if(empty($password)){
    echo "This Don't Know your Password.<br>";
}else{
    echo "This Know your Password.<br>";
}

// $_POST ["] variable return values as a associative array.
foreach($_POST as $key => $value){
    echo $key ." = " . $value . "<br>";
}


?>