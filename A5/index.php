<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A5</title>
</head>

<body>
    <?php

    $students = array(45 => "Ayush", 35 => "Krish", 10 => "Rishabh");
    $sum = array(10, 20, 30, 40, 50);
    $c_value = array("Ayush", "Krish", "Rishabh", "Akhilesh", "Nirav", "Ayush", "Devanshu", "chirag");
    $range = range(90, 100);
    $shuffle = array("A", "Y", "U", "S", "H", "Ayush", "Rajgor");
    $SData = array('Ayush' => "99", 'Rajgor' => 95);
    $col = array(
        array(
            "id" => 30,
            "name" => "Ayush"
        ),
        array(
            "id" => 20,
            "name" => "Rishabh"
        )
    );

    print(Array_search("Ayush", $students));
    echo "<br>";
    echo "<br>";

    print(array_sum($sum));
    echo "<br>";
    echo "<br>";

    print(count($students));
    echo "<br>";
    echo "<br>";
    print(sizeof($students));
    echo "<br>";
    echo "<br>";

    print_r(array_count_values($c_value));
    echo "<br>";
    echo "<br>";

    print_r($range);
    echo "<br>";
    echo "<br>";

    shuffle($shuffle); // note
    print_r($shuffle);
    echo "<br>";
    echo "<br>";

    print_r(array_merge($students, $shuffle));
    echo "<br>";
    echo "<br>";

    print_r(array_change_key_case($SData, CASE_UPPER));
    echo "<br>";
    echo "<br>";
    print_r(array_change_key_case($SData, CASE_LOWER));
    echo "<br>";
    echo "<br>";

    print_r(array_chunk($c_value, 2));
    echo "<br>";
    echo "<br>";

    print_r(array_column($col, "name"));
    echo "<br>";
    echo "<br>";

    print_r(array_diff($c_value, $shuffle));

    ?>
</body>

</html>
