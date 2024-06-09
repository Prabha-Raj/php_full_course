<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathemetics built in Functions .</title>

</head>
<body>
    <form action="06_math_functions.php" method="post">
        <label for="">x : </label>&nbsp;&nbsp;
        <input type="text" name="x"><br>
        <label for="">y : </label>&nbsp;&nbsp;
        <input type="text" name="y"><br>
        <label for="">z : </label>&nbsp;&nbsp;
        <input type="text" name="z"><br>
        <br><input type="submit" value="total"><br><br>
    </form>
</body>
</html>

<?php
$x = $_POST["x"];
$y= $_POST["y"];
$z = $_POST["z"];
$total = null;

// $total =  abs($x); //absolute function.
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x,$y);
// $total = max($x,$y,$z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(1,10);


echo $total;

?>