<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox in php.</title>
</head>
<body>
    <h1>Select your item .</h1>
    <form action="16_checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">&nbsp;&nbsp;
        <label for="">Pizza .</label><br>
        <input type="checkbox" name="hamburger" value="Hamburge">&nbsp;&nbsp;
        <label for="">Hamburge .</label><br>
        <input type="checkbox" name="hotdog" value="Hotdog">&nbsp;&nbsp;
        <label for="">Hotdog .</label><br>
        <input type="checkbox" name="taco" value="Taco">&nbsp;&nbsp;
        <label for="">Taco .</label><br>
        <input type="checkbox" name="momo" value="Momos">&nbsp;&nbsp;
        <label for="">Momos .</label><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    if(isset($_POST["pizza"])){
        echo "You like Pizzas ! .<br>";
    }
    if(isset($_POST["hamburger"])){
        echo "You like Hamburgers ! .<br>";
    }
    if(isset($_POST["hotdog"])){
        echo "You like Hotdogs ! .<br>";
    }
    if(isset($_POST["taco"])){
        echo "You like Tacos ! .<br>";
    }
    if(isset($_POST["momo"])){
        echo "You like Momos ! .<br>";
    }
    if(empty($_POST["pizza"])){
        echo "You DON'T like Pizzas ! .<br>";
    }
    if(empty($_POST["hamburger"])){
        echo "You DON'T like Hamburgers ! .<br>";
    }
    if(empty($_POST["hotdog"])){
        echo "You DON'T like Hotdogs ! .<br>";
    }
    if(empty($_POST["taco"])){
        echo "You DON'T like Tacos ! .<br>";
    }
    if(empty($_POST["momo"])){
        echo "You DON'T like Momos ! .<br>";
    }
}

?>