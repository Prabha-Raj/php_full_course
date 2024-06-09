<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset & empty functions</title>
</head>
<body>
    <form action="14_login_system.php" method="post">
        <lable>Enter Username : &nbsp; &nbsp;</lable>
        <input type="text" name="username"><br><br>
        <label>Enter Password : &nbsp;&nbsp;</label>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Log In" name="login"><br><br>
    </form>    

</body>
</html>

<?php
// isset() == it returns " TRUE " if a variable is declared and (not null), false, true, "" ;.
// empty() == it Returns " TRUE " if a variable is not declared and false, null, "" ;.
$login_status = false;
if(isset($_POST["login"])){
    echo "You are trying to Login..... !<br><br>";
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username) and empty($password)){
        echo "Username and Password Both are Missing ! <br>";
    }elseif(empty($username)){
        echo "Username is Missing ! <br>";
    }elseif(empty($password)){
        echo "Password is Missing ! <br>";
    }else{
       $login_status = true; 
    }
}
if($login_status){
    echo "Wellcome To my login System !!!.";
}


?>