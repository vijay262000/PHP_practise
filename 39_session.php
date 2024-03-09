<?php
//what is session
//used mange information across diffrent pages


//verify user login info

session_start();
$_SESSION['username']="vijay";
$_SESSION['favCat']="Books";
echo "we have saved your session";

?>