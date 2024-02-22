<?php

$servername ="localhost";
$username ="root";
$password ="";
$database="contact";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){

   die( "we failed database  connection:" .mysqli_connect_error());


}
else{

    echo " connection was successfull<br>";

}
//find the records
$sql = "SELECT * FROM `contactus` ";
$result =mysqli_query($conn,$sql);

$num =mysqli_num_rows($result);
echo "$num";

//display the records

if($num> 0){
    /*$row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row =mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>"; */
    
    //we can fetch better way using while loop

    while($row = mysqli_fetch_assoc($result)){
       
        
        echo"<br>";
    }


}





?>