<?php
//start the session get the data 
session_start();
if(isset($_SESSION['username'])){
echo "welcome ". $_SESSION['username'];
echo "<br> Your fav categeory is ". $_SESSION['favCat'];
echo "<br>";
}
else{

    echo "please login to continue";

}


?>