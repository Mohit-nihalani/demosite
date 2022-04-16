<?php 
$title ="While";
include 'header.php'?> 
    <h1>While Loop</h1>
    <?php 
        $count = 0;
        while($count<10)
        {
            echo $count."</br>";
            $count++;
           
        }
    
   
   echo "<h1>Do While </h1>";
  
   
   do
   {
       echo " $count There is something to be printed<br>";
       $count++;
   }
   while($count<10); 
   ?>
  <?php include 'footer.php'?>