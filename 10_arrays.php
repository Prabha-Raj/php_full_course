<?php
// Array Damo class.
// array :=  array is an special variable that can store multiple (more than one) values at a time.
//           array also store combination of diffrent data types of values.  

$foods = array("Banana", "Apple", "Salty Apple", "Fingers", "Burgur", 9, 8.5, true);

// first way to display an array elements.
// echo var_dump($foods);

// second way to display an array elements.
/*
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";
echo $foods[4] . "<br>";
echo $foods[5] . "<br>";
echo $foods[6] . "<br>";
echo $foods[7] . "<br>";
*/

// third way to display an array elements.
/*
$i = 0;
foreach($foods as $food){
    echo  "\$foods[{$i}] = &nbsp; {$food} <br>";
    $i++;
}
*/

// Some important functions  of array in php.
// $foods[0] = "Guava"; // it is use for change the volue of given index position.
// array_push($foods, "Mango"); // is use for add a value in array at the end position of array. 
// array_pop($foods); // it is use for remove a value from array at the end position of the array.
// array_shift($foods); // it is use for remove a value from array at the start position of the array.
// $foods = array_reverse($foods); // it used for reverse array element of the array.
echo "Total No of element in this array are :  &nbsp;&nbsp;". count($foods). "<br><br>" ;// it is use for count no of element of the array.



$i = 0;
foreach($foods as $food){
    echo  "\$foods[{$i}] = &nbsp; {$food} <br>";
    $i++;
}

?>