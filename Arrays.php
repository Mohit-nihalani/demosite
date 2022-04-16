<?php 
$title ="Arrays";
include 'includes\header.php'?>
    <h1>PHP ARRAYS</h1>
<?php
    $arr = [1,23,3,44,5,65,7,68,95,10];
    $size = count($arr);
    for($i = 0; $i < $size; $i++)
    {
        echo "$arr[$i]<br>";  
    }
?>
<?php include 'includes\footer.php'?>