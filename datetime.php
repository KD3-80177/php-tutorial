<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Date and Time Manipulation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Date and Time</h1>
    <?php 
        $date = getdate();
        echo "Today's date: ".$date['mday'].'-'.$date['mon']."-".$date['year']."</br>";
        //echo "current time is: ";
        //echo $time['hour']."</br>";
        $time = date('h:i:s');
        echo "current time is: $time";
    ?>
    
</body>
</html>