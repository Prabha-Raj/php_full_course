<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate area of a circle. </title>
</head>
<body>
    <form action="07_area_of_circle.php" method="post">
        <label for="">Enter radius of a Circle : </label>&nbsp;&nbsp;
        <input type="text" name="r"><br><br>
        <input type="submit" value="Calculate"><br><br>
    </form>
</body>
</html>

<?php
$radius = $_POST["r"];
$circumference = null;
$area = null;
$volume = null;


$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

// $area = pi() * $radius * $radius; // or
$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = ( 4/3 * pi() * pow($radius, 3) );
$volume = round($volume, 2);

echo "Circumference = &nbsp; {$circumference}cm .<br>";
echo "Area = &nbsp; {$area}cm<sup>2<sup> .<br>";
echo "Volume = &nbsp; {$volume}cm<sup>3<sup> .<br>";


?> 