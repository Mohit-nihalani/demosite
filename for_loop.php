<?php 
$title ="For_loop";
include 'includes\header.php'?>
    <h1>For Loop</h1>
    <?php 
        //For Loops
        $sum = 10;
        for($count = $sum; $count >= 0; $count--)
        {
            echo  $count."<br>";
            if($count == 0)
            {
                echo "Boom";
            }
        }
       
    ?>
<?php include 'includes\footer.php'?>