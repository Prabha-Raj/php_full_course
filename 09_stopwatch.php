<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Watch using while loop</title>
</head>
<body>
    <form action="09_stopwatch.php" method="post">
        <input type="submit" value="Stop" name="stop">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Start" name="start">
    </form>
</body>
</html>
<?php
$second = 0;
$running = true;
$start = true;
$stop = false;
$start = $_POST["start"];
$stop = $_POST["stop"];

while($running){
    if($start){
        $second++;
        echo $second,"<br>";
        sleep(2);
        if($stop){
        $running = false;
        }
    }
}

?> 
