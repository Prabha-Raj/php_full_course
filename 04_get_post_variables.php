<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get & post  method in php</title>

</head>
<body>
    <form action="04_get_post_variables.php" method="post">
        <label for="">How many pizzas are you want to buy : </label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value="Buy"><br>

    </form>
</body>
</html>

<?php

$item = "Pizza";
$price = 5.49;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}s <br>";
echo "Price = &nbsp; \${$price}/{$item} <br>";
echo "Total Price of your order : &nbsp; \${$total}<br>";


?>
