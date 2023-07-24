<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>String Manipulation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        $phrase1 = "Hii niraj";
        $phrase2 = "how are you?";
        $name = "nIraJ";
        echo $phrase1.", ".$phrase2.'</br>';
        echo "Upper case first word: ".ucfirst($name).'</br>';
        echo "Uppercase first letter of each word: ".ucwords($phrase1).'</br>';
        echo "Uppercase everything: ".strtoupper($phrase2)."</br>";
        $phrase1 = strtoupper($phrase1);
        echo $phrase1.'</br>';
        echo '</hr>';
        echo 'repeat string: '.str_repeat('o', 10).'</br>';
        echo 'Get a substring from: '.substr(str_repeat('A',20), 11, 5).'</br>';
        echo 'Get a position of string N: '.strpos($name, 'n').'</br>';
    ?>
</body>
</html>