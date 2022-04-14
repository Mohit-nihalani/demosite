<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Here is the Answer</title>
</head>
<body>
    
    <h1>Storing the variables</h1>
    
    <?php
    for($loop1 = 2, $loop2 =2; $loop1<6 && $loop2<6;$loop1++,$loop2++)
    {
        echo"$loop1 x $loop2  = ",$loop1 * $loop2,"<br>";
    }

    ?>    

</body>
</html>
