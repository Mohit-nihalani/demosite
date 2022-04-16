<?php 
$title ="Functions";
include 'includes\header.php'?>
    <h1> PHP - Functions</h1>

    <?php
    echo "Function demo";
    function writeMessage(){
        echo "You are really nice person <br>";
    }

    writeMessage();

    echo " Function with parameters <br> ";
    function addNumbers($num1, $num2)
    {
        $sum = $num1 + $num2 ;
        echo "The additions of $num1 and $num2 is : $sum";
    }
    addNumbers(10,30);
    
    function returnProd($num1 , $num2)
    {
        $prod = $num1 * $num2;
        return $prod;
    }
    print"<br>";
    $reVal = returnProd(10,200);
    echo "$reVal";

    ?>
<?php include 'includes\footer.php'?>