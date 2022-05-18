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
            array("Donorid" => "D-101", "DonorName" => "Yatri", "BloodGroup" => "B Positive"),
            array("Donorid" => "D-102", "DonorName" => "Komal", "BloodGroup" => "A Positive"),
            array("Donorid" => "D-103", "DonorName" => "hardik", "BloodGroup" => "B Positive"),
            array("Donorid" => "D-104", "DonorName" => "Shanvi", "BloodGroup" => "O Positive"),
            array("Donorid" => "D-105", "DonorName" => "Yuvraj", "BloodGroup" => "B Positive"),
            array("Donorid" => "D-106", "DonorName" => "Mansi", "BloodGroup" => "O Negative"),
         );
         $new =array();
         // BloodGroup new Array
        for ($i=0; $i<6; $i++){
            $t = $arr[$i]["BloodGroup"];
            array_push($new,$t);
        };
         $c = array_count_values($new) ;
        print_r($c);
    ?>
</body>
</html>