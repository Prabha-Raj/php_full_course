

<?php
// For single data
/*
include("database.php");
// $sql = "SELECT * FROM users WHERE username = 'Prabhakar'";
$sql = "SELECT * FROM users WHERE userid = '1'";
$result = mysqli_query($db_conn, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo "<br><br> User Found And User's Details are :--- <br>";
    echo "User_Id := &nbsp;". $row["userid"]."<br>";
    echo "User_Name := &nbsp;". $row["username"]."<br>";
    echo "User_Password := &nbsp;". $row["userpass"]."<br>";
    echo "User_Registration_Date := &nbsp;". $row["regdate"]."<br>";
}else{
    echo "User Not Found ! <br>";
}

mysqli_close($db_conn);

*/



// For selecting Multiple datas.


include("database.php");
$sql = "SELECT * FROM users " ;
$result = mysqli_query($db_conn, $sql);
if(mysqli_num_rows($result) > 0){
    echo "<br><br> Users are Found And each User's Details are :--- <br>";
    while ($row = mysqli_fetch_assoc($result)){
    echo "User_Id := &nbsp;". $row["userid"]."<br>";
    echo "User_Name := &nbsp;". $row["username"]."<br>";
    echo "User_Password := &nbsp;". $row["userpass"]."<br>";
    echo "User_Registration_Date := &nbsp;". $row["regdate"]."<br><br>";
}
}else{
    echo "User Not Found ! <br>";
}

mysqli_close($db_conn);

?>

