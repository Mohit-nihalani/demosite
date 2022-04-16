<?php 
$title ="Date";
include 'header.php'?>
    <h1>Date and Time Manipulation</h1>
    <?php
        $date = getdate();
        echo $date['mday']."<br>";
        echo $date['mon']."<br>";
        echo $date['year']."<br>";

    ?>
<?php include 'footer.php'?>