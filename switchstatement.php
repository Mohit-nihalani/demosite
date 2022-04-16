<?php
$title ="Switch";
include 'header.php'?>
    <h1>Switch Statement</h1>
    <?php 
        $grade = 'A';
        switch($grade)
        {
            case 'A':
                echo "You have got $grade you are a SuperStar";
                break;
                case 'B':
                    echo "You have got $grade you are a hero";
                    break;
                    case 'C':
                        echo "You have got $grade you are a side hero";
                        break;
        }

    
    ?>
<?php include 'footer.php'?>