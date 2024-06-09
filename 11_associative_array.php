<?php
//demo of associative array.

// associative array = an array that is store elements with key & value pairs and each element saprated with commas,

$capitals = array(
    "USA" => "Washington D. C." ,
    "Japan" => "Kyoto",
    "Shouth Korea"=> "Seoul",
    "India" => "New Delhi",
);

//Disply the associative array
echo "Capital of USA is : &nbsp; {$capitals["USA"]} <br><br>";

// Some usefull function of associative array . 
// $capitals["USA"] = "Las Vegas"; // it is  use for change a value of present key.
// $capitals["China"] = "Beijing"; // it is use for add new element in associtive array.
// array_pop($capitals); // it is use for remove a value from associative array at the end position of the array.
// array_shift($capitals); // it is use for remove a value from associative array at the start position of the array.
// $capitals = array_flip($capitals); // it is use for swap key with value or value with key.
// $capitals = array_reverse($capitals); // it used for reverse associative array element of the array.
echo "Total No of element in this array are :  &nbsp;&nbsp;". count($capitals). "<br><br>" ;// it is use for count no of element of the array.


foreach($capitals as $key => $value){
    echo "The Capital of {$key} is : &nbsp; {$value} .<br>";
    
}

$keys =  array_keys($capitals);
echo "<br>All Keys of associative array are :<br>";
foreach($keys as $key){
    echo $key .  "<br>";
}


$values =  array_values($capitals);
echo "<br>All Values of associative array are :<br>";

foreach($values as $value){
    echo $value .  "<br>";
}

?>