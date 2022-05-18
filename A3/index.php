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
    //(a) php constants
    define("Test","jello");
    echo constant("Test");
    echo"<br>";

    //(b) Data Types (Interger, Float , String, Boolean ) in PHP.
    $i = 123;
    $f = 10.31;
    $s = "string";
    $b = true;

    var_dump($i);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($s);
    echo "<br>";
    var_dump($b);
    echo "<br>";

    //(c) Indexed and Associative Array
    $marks = array(50,40,30);
    $marks1 = array("nirav"=>50,"ar"=>40,"krish"=>30);
    print_r($marks); 
    echo "<br>";
    print_r($marks1);
    echo "<br>";

    //(d) single and multi dimensional array
    $car = array(
        "krish" => array(
            "C" => 35,
            "java" => 40,
            "python" => "failed",
        ),
        "Nirav" => array(
            "C" => 55,
            "java" => 44,
            "python" => 58,
        ),
        "sdk" => array(
            "C" => 39,
            "java" => 45,
            "python" => 53,
        ),
        );
    print_r($car);
    
    ?>
</body>
</html>