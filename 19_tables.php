<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables </title>
    <style>
        *{
            /* margin-left:20px; */
        }
    </style>
</head>
<body>
    <form action="19_tables.php" method="post">
    <label for="">Enter a Number for table : </label><br><br>
    <input type="text" name="max_num"><br><br>
    <input type="submit" value="Print" name="print"><br><br>
    </form>
</body>
</html>

<?php
$max_num = $_POST["max_num"];
// echo "<pre>";
for($i=1; $i<=$max_num; $i++){
    for($j=1; $j<=$max_num; $j++){
        echo "<b style=\"margin-left:80px;\">".$i*$j."<b>";
    }
    echo "<br>";
}
// echo "</pre>";
?>

