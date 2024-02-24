<?php
$servername ="localhost";
$username ="root";
$password="";
$database ="contact";

$conn =mysqli_connect($servername, $username, $password, $database);

if(!$conn){

    die("sorry we failed connection:" . mysqli_connect_error());

}
else{

    echo "database connected successfully";

}

$sql ="DELETE FROM `contactus` WHERE `contactus`.`srno` = 1";
$result=mysqli_query($conn, $sql);
$aff =mysqli_affected_rows($conn);
echo "<br>Number affected rows<br> .$aff ";

if($result){

    echo "delete successfully";

}
else{

    $err =mysqli_error($conn);
    echo "delete not successfully because this-----> .$err";
}
?>