<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of a Number : </title>
</head>
<body>
    <form action="18_table.php" method="post">
        <label>Enter a Number : </lable>&nbsp;&nbsp;
        <input type="text" name="num" ><br>
        <input type="submit" value="Table" name="table" ><br><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST["table"])){
    $num = $_POST["num"];
    for($i=1; $i<=10; $i++){
            echo "{$num} &nbsp; X &nbsp; {$i} &nbsp; = &nbsp; ". $i * $num ."<br><br>";
    }
}

?>