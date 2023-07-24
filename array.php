<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Array and printouts</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Arrays</h1>
    <?php 
    $n = 10;

    $array = array(1,2,3,4,5,6,7,8,9,10);
    for($i = 0 ; $i < count($array); $i++){
        echo "$i element is $array[$i]</br>";
    }
    ?>
    <h1>using while loop</h1>
    <?php
    $j = 4;
    while($j <= 9){
        echo "$j element is $array[$j]</br>";
        $j++;
    }
    ?>
</body>
</html>