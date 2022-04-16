<?php 
$title ="Home";
include 'includes\header.php'?>
    
    <h1>PHP COURSE</h1>
    
    <?php
    for($loop1 = 2, $loop2 =2; $loop1<6 && $loop2<6;$loop1++,$loop2++)
    {
        echo "${loop1} x ${loop2} = ",($loop1 * $loop2),"<br>";
    }

    ?>
    <button type="button" class="btn btn-dark">Click ME</button>    
    <button type="button" class="btn btn-primary">Click ME</button>    
    <button type="button" class="btn btn-warning">Click ME</button>    
<?php include 'includes\footer.php'?>
