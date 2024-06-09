<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary of Country Capitals </title>
</head>
<body>
    <h1 style="color:green;">Search Capitals of Country by using Country key .</h1>
    <form action="12_capitals_dictionary.php" method="post">
        <lable>Enter Cuntry Name : </lable>&nbsp;&nbsp;
        <input type="text" name="country"><br><br>
        <input type="submit" value="Search"><br><br><br>
    </form>
</body>
</html>

<?php
$capitals = array(
    "USA" => "Washington D. C." ,
    "Japan" => "Kyoto",
    "Shouth Korea"=> "Seoul",
    "India" => "New Delhi",
    "China" => "Beijing",
);

$countrykey = $_POST["country"];

$count = 0;
foreach($capitals as $key => $value){
    if($countrykey == $key){
        $count++;
    }
}

if($count > 0){
    $capital = $capitals[$countrykey];
    echo "<h3>The Capital of  &nbsp;&nbsp;<sup>\"</sup> <em style=\"color:red;\"> {$countrykey} </em> <sup>\"</sup>&nbsp;&nbsp; is : &nbsp;&nbsp; <em style=\"color:blue;\"> {$capital} </em>.<h3><br>";
}else{
    echo "<h5> We are sorry !</h5> <br>";
    echo "<h6>We could not found Capital of {$country} .</h6><br>";
}
?>