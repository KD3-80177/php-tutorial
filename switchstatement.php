<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Switch statement workingS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Switch statement</h1>
    <?php 
        $grade = 'A';
        $grade = 'B';
        $grade = 'C';

        switch($grade){
            case 'A':
                echo '<h2 style="color: orange">u did it</h2>';
                break;
            case 'B':
                echo '<h2 style="color: red">u tried hard</h2>';
                break;
            default:
                echo '<h2 style="color: blue">u not tried</h2>';
                break;
        }

    ?>
</body>
</html>