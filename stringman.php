<?php 
$title ="String";
include 'includes\header.php'?>
    <h1>String Manipulation</h1>
    <?php 
    
    $name = "mohit Nihalani";
    
    echo "Result of using ucfirst function of php ".ucfirst($name)."<br>";
    echo "Result of using ucwords function of php ".ucwords($name)."<br>";
    echo "Result of using ucwords function of php ". strtoupper($name)."<br>";
    echo "Result of using ucwords function of php ". strtolower($name)."<br>";
    echo "The repeat function in action : ". str_repeat("$name<br>" , 5)."<br>";
    echo "The substr function in action : ". substr("$name <br>" , 5, 10)."<br>";
    echo "The strpos function in action : ". strpos("$name <br>" , "ni")."<br>";
    echo "The strchr function in action : ". strchr("$name <br>" , "ni")."<br>";
    ?>
<?php include 'includes\footer.php'?>