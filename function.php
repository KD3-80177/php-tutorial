<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Functions</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        function writemessage(){
            echo "function called correctly </br>";
        }

        writemessage();

        $num1 = 10.25;
        $num2 = $num1/2;
        sum($num1, $num2);
        function sum(&$num1,$num2){
            $sum = $num1 + $num2;
            echo "sum is: $sum</br>";
            $num1 *= 2;
            return $num1;
        }
        $return = sum($num1, $num2);
        echo $return."</br>";
        //sum(100,200);

        function returnProd($num1,$num2){
            $prod = $num1*$num2;
            return $prod;
        }

        $returnval = returnProd(10,20);
        echo $returnval."</br>";
    ?>
</body>
</html>