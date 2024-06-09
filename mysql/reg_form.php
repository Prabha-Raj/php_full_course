<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form with database :</title>
</head>
<body>
    <h1 style="color:red;">Welcome to Facebook !</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    USERNAME : &nbsp;<input type="text" name="username" ><br>
    PASSWORD : &nbsp;<input type="text" name="password"><br>
    <input type="submit" value="Register" name="register"><br><br>
    </form>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) && empty($password)){
        echo "Please Enter USERNAME and PASSWORD !<br>";
    }
    elseif(empty($username)){
        echo "Please Enter USERNAME !<br>";
    }
    elseif(empty($password)){
        echo "Please Enter PASSWORD !<br>";
    }else{
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO  users (username, userpass)  
                VALUE ('$username', '$hash_pass')";
        mysqli_query($db_conn, $sql);
        echo "<h4><pre style=\"color:green;\">Congratulation !!!!! </pre> &nbsp;Your Registered in Facebook.com .<br><br></h4>";

        include("database.php");
        $sql = "SELECT * FROM users " ;
        $result = mysqli_query($db_conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<br><br> Users are Found And each User's Details are :--- <br>";
            while ($row = mysqli_fetch_assoc($result)){
                echo "User_Id := &nbsp;". $row["userid"]."<br>";
                echo "User_Name := &nbsp;". $row["username"]."<br>";
                echo "User_Password := &nbsp;". $row["userpass"]."<br>";
                echo "User_Registration_Date := &nbsp;". $row["regdate"]."<br><br>";
            }
        }else{
            echo "User Not Found ! <br>";
        }
        mysqli_close($db_conn);

    }
}

?>