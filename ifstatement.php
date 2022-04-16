<?php 
$title ="IfStatement";
include 'includes\header.php'?>
<h1>If-Else Statement</h1>

<?php

$grade = 50;
$passing = 45;
if($grade < $passing)
{
    echo "You scored :$grade you failed";
}
else
{
    echo "You scored:$grade you Passed !";
}

?>
<?php include 'includes\footer.php'?>