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
        $arr = array(
           array("Enroll_num" => "19SE02CE001", "Name" => "A"),
           array("Enroll_num" => "19SE02CE002", "Name" => "B"),
           array("Enroll_num" => "19SE02CE003", "Name" => "C"),
           array("Enroll_num" => "19SE02CE004", "Name" => "D"),
           array("Enroll_num" => "19SE02CE005", "Name" => "E"),
           array("Enroll_num" => "19SE02CE006", "Name" => "F"),
           array("Enroll_num" => "19SE02CE007", "Name" => "G"),
           array("Enroll_num" => "19SE02CE008", "Name" => "H"),
           array("Enroll_num" => "19SE02CE009", "Name" => "I"),
        );
    $ar = array_chunk($arr,3);
    print_r($ar[0]);
    echo "<br>";
    print_r($ar[1]);
    echo "<br>";
    print_r($ar[2]);
    echo "<br>";

    ?>
</body>
</html>