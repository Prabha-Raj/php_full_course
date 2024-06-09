<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
</head>
<body>
    <h1>this is the HOME page .</h1>
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout"><br>
    </form>
    <hr>
</body>
</html>

<?php

echo "Your User Name : &nbsp; {$_SESSION["username"]}<br>";
echo "Your Password  : &nbsp; {$_SESSION["password"]}<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
}

?>
