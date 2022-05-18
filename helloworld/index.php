<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ver = phpversion(); //return php version 
    echo "$ver<br>";
    //phpinfo();
    //echo "Hello world";
    echo "hello ", Gettype($ver);
    echo "<br>";
    $name = "Ayush";
    echo "I am $name";
    ?>
</body>
</html>