<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons </title>
</head>
<body>
    <form action="15_radio_buttons.php" method="post">
        <lable>Plese Select you Gander : </lable><br>
        <input type="radio" name="gander" value="Male" id=""> &nbsp;Male .<br>
        <input type="radio" name="gander"value="Female" id=""> &nbsp;Female .<br>
        <input type="radio" name="gander" value="Transgander" id=""> &nbsp;Transgander .<br><br><br>
        <input type="submit" value="Confirm" name="confirm"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST["confirm"])){
    if(isset($_POST["gander"])){
        $gander = $_POST["gander"];
        if($gander == "male"){
            echo "You are a {$gander} .<br>";
        }
        elseif($gander == "female"){
            echo "You are a {$gander} .<br>";
        }
        elseif($gander == "transgander"){
            echo "You are a {$gander} .<br>";
        }
    }
    else{
        echo "Please Select your Gander Bro ! <br>";
    }
}

?>
