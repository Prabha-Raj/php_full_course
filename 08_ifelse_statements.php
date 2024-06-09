<?php
$grade = "A+";

if($grade == "A++"){
    echo "your performance is Exlent ! <br>";
}elseif($grade == "A+"){
    echo "your performance is very very good ! <br>";
}elseif($grade == "A"){
    echo "your performance is too good ! <br>";
}elseif($grade == "B"){
    echo "your performance is  good ! <br>";
}elseif($grade == "C"){
    echo "your performance is  week ! <br>";
}elseif($grade == "D"){
    echo "your performance is  too week ! <br>";
}elseif($grade == "E"){
    echo "your performance is  very very week ! <br>";
}elseif($grade == "F"){
    echo "your performance is fail (Looser) ! <br>";
}else{
    echo "{$grade}, Grade is not Valid ! <br>";
}
    
?>