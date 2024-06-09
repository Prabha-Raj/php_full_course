<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page </title>
</head>
<body>
    <h1>this is the LOGIN page .</h1>
    <form action="index.php" method="post">
        username : <input type="text" name="username"><br>
        password : <input type="text" name="password"><br>
        <input type="submit" value="login" name="login"><br>
    </form>
    <hr>
</body>
</html>

<?php
if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        
        header("Location: home.php");
        
    }
}
?>
