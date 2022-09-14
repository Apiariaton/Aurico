<!DOCTYPE html>
<html>
<?php

$servername = "localhost"  ;
$database = "ecosystem";
$username = "root";
$password = "";
    
$link = mysqli_connect($servername,$username,$password,$database);
    
//$sql = "SELECT * FROM `trees`;";
  
$gtr = " SELECT * FROM TREES;";
    

$atr = "INSERT INTO TREES (SPECIES, NICKNAME,FUNGALPARTNERS,COORDINATEX) VALUES ('Fir','Elena',5,50)";
    
$atresult = mysqli_query($link,$atr);
    
    
    
    
echo $gtr;
    
    
$result = mysqli_query($link,$gtr);
    
$trees = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
print_r($trees);
    

if ($link){
    echo "No errors thrown.";
}

//if ($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}

$sql = "USE ecosystems; INSERT INTO TREES (SPECIES, NICKNAME,FUNGALPARTNERS,COORDINATEX) VALUES ('Fir','Elena',6,25);SELECT * FROM TREES;";
    
//if (mysqli_query($link,$sql)){
//    echo "Tree records successful"
//} else {
//    echo "ERROR: Could not execute."
   // mysqli_error($link);
//}

mysqli_close($link);
?>
</html>
