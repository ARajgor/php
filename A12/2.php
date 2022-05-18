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
        function Percentage($arr){
           // print_r($arr);
            $cal = $arr["Marks"];
            $per = ($cal[0]+$cal[1]+$cal[2])*100/300;
            echo "<br>"."$per"."<br>";
            return $per;
        };
        function Grade($p){
            if ($p < 70){
                echo "Your grade is C";
                }
            elseif($p>70 & $p <80){
                echo "Your grade is B";
            }
            elseif($p>80 & $p <90){
                echo "Your grade is A";
            }
            elseif($p>90){
                echo "Your grade is A+";
            }
            
        };
        $arr = array(
            array("Enroll_num" => "19SE02CE001", "Name" => "A", "Marks"=>[95,95,95]),
            array("Enroll_num" => "19SE02CE002", "Name" => "B", "Marks"=>[45,34,48]),
            array("Enroll_num" => "19SE02CE003", "Name" => "C", "Marks"=>[45,34,48]),
         );

         $p = Percentage($arr[0]);
         Grade($p);
    ?>
</body>
</html>