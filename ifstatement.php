<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP primer IFSTATEMENT</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h2 style= "color: red"></h2>
    <?PHP 
        echo "<h2> lets see what if does</h2>";

        $gender = "none";
        if ($gender == "Male"){
            echo "Ewwww u r a sigma man";
            echo "</br>";
            echo '<h2 style="color: red">be a sigma not a barbie and go watch oppenheimer</h2>';
        }
        else{
            echo '<h2 style= "color: pink">go watch barbie</h2>';
        }


    ?>
</body>
</html>