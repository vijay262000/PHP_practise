<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="contact";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successfull
if(!$conn){

    die ("we failed database coonection:" . mysqli_connect_error());

}
else{

    echo "database connection was successful<br>";
}

$sql = "SELECT * FROM `contactus` WHERE `name` ='swapnil'";
$result = mysqli_query($conn, $sql);
//usage of where clause to fetch the data from database
$num = mysqli_num_rows($result);
echo $num ."records found in the database<br>";
$no=1;
if($num> 0){
         
           while($row =mysqli_fetch_assoc($result)){
            echo $no, $row['name'], $row['email'], $row['consern'];
            echo "<br>";
            $no=$no+1;
           }


}
//usage of where clause update data
$sql="UPDATE `contactus` SET `name` = 'karanupdate' WHERE `contactus`.`srno` = 26"; 
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff =mysqli_affected_rows($conn);
echo "<br> number affected rows: $aff<br>";
if($result){
    echo "we updated record successfully";
}
else{
     echo "we could not update the record successfully"; 
}
?>
