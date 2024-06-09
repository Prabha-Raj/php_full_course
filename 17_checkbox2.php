<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox in php.</title>
</head>
<body>
    <h1>Select your item .</h1>
    <form action="17_checkbox2.php" method="post">
        <input type="checkbox" name="item[]" value="Pizza">&nbsp;&nbsp;
        <label for="">Pizza .</label><br>
        <input type="checkbox" name="item[]" value="Hamburge">&nbsp;&nbsp;
        <label for="">Hamburge .</label><br>
        <input type="checkbox" name="item[]" value="Hotdog">&nbsp;&nbsp;
        <label for="">Hotdog .</label><br>
        <input type="checkbox" name="item[]" value="Taco">&nbsp;&nbsp;
        <label for="">Taco .</label><br>
        <input type="checkbox" name="item[]" value="Momos">&nbsp;&nbsp;
        <label for="">Momos .</label><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
$foods = $_POST["item"];
// echo $foods;
foreach($foods as $food){
    echo $food . "<br>";
}


?>
