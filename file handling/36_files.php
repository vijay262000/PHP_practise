<?php
$fptr = fopen("myfile.txt","r");
//echo fgets($fptr);
//echo fgets($fptr);
//
//echo var_dump(fgets($fptr));
//reading a file line by line
/*while($a =fgets($fptr)){

    echo $a;
    break ;

   

}
echo "<br>end of the file has been reached";
*/
  //echo fgetc($fptr);
//reading file character by charcter
/*while($a =fgetc($fptr)){

    echo $a;
    //break ;

   

}
echo "<br>end of the file has been reached";
*/
while($a = fgetc($fptr)){
    echo $a;
    if($a =="."){
        break;
    }
    

}
fclose($fptr);
?>