<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER super globle variable</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username : <br>
        <input type="text" name="username">
        <input type="submit" value="Submit" name="submit"><br><br>


    </form>
</body>
</html>


<?php
// if(isset($_POST["submit"])){
    // foreach($_SERVER as $key => $value){
    //     echo "{$key} : = : {$value} <br>";
    // }
// }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Hello"; 
}

?>