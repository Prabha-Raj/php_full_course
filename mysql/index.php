<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>database</title>
    </head>
    <body>
        <br> Hello <br>
    </body>
</html>
    
<?php
include("database.php");
$username = "Abhay Pratap Rajput";
$password = "abhay123";

$hash_pass = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO  users (username, userpass)  
        VALUE ('$username', '$hash_pass')";

mysqli_query($db_conn, $sql);
mysqli_close($db_conn);

?>