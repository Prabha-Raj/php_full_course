<?php
setcookie("fav_food", "Pizza", time() + (86400 * 4), "/");
setcookie("fav_drink", "Coffee", time() + (86400 * 4), "/");
setcookie("fav_dessert", "Ice_Cream", time() + (86400 * 6), "/");

echo "<h1> This page tall about COOKIES .</h1>";
foreach($_COOKIE as $key => $value){
    echo "{$key} &nbsp; = &nbsp; {$value} .<br>";
}

if(isset($_COOKIE["fav_food"])){
    echo "<br> YOU BYING SOME {$_COOKIE["fav_food"]} .<br>";
}else{
    echo "I don't know about your favorite food .<br>";
}
?>