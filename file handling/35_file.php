<?php
$fptr= fopen("myfile.txt","r");

if(!$fptr){
    die("unable to open this this file.please eneter valid name");
}
$content= fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;
?>
