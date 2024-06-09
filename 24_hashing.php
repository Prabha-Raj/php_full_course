<?php
// hassing  is used for hiding some sanstive data.
$password = "Prabha@86300";
$hash_password = password_hash($password, PASSWORD_DEFAULT);

echo $password."<br>";
echo $hash_password."<br>";

if(password_verify("Prabha@86300", $hash_password)){
    echo "The Password is correct !<br>";
}else{
    echo "The Password is Incorrect !<br>";
}

?>