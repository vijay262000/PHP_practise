<?php
//write to file in php
/*
echo "welome file in php";
$fptr = fopen("myfile2.txt","w");
fwrite($fptr, "this most value file in this palnet\n");
fwrite($fptr, "This is 3rd content\n");
fwrite($fptr, "This is 4rd content");
fclose($fptr);
*/
//appending to file in php
$fptr = fopen("myfile2.txt","a");

fwrite($fptr, "this is being appended file \n");
fwrite($fptr, "this is appended file \n");
fclose($fptr);


?>