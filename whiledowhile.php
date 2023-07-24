<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>While - dowhile loops</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <h1>While loop</h1>
    <?php 
    $grade = 0;
        while($grade < 10){
            echo "current grade: $grade</br>";
            $grade++;
        }
        echo "EXIT";
    ?>
    <h1>Do while</h1>
    <?php 
        $grades = 0;
       do{
            echo "current garde: $grades </br>";
            $grades++;

       }while($grades<=6);
       echo "exits"
    ?>
</body>
</html>