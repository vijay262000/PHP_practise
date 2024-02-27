<?php
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="vijay";

$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$conn){
    die("sorry we failed connection". mysqli_connect_error());

}
 else{    
    echo "connection was succesfull<br>";
}
?>
