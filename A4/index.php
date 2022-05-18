<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with PHP</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: pink;
        }
    </style>
</head>

<body>
    <?php
    $sub_arr = array('student Name', 'Department', 'Percentage');
    $stud_arr = array(
        array('Ayush', 'Computer', 95),
        array('Krish', 'Computer', 85),
        array('Nirav', 'Computer', 89),

    );
    ?>
    <table>
   
        <?php
        echo "<tr>";
        for ($i =0; $i<3; $i++){
            
            echo'<th>'.$sub_arr[$i].'</th>';
        }
        echo "</tr>";
        for ($i = 0; $i < 3; $i++) {
            
            echo '<tr>';
            
            for ($j = 0; $j < 3; $j++) {

                echo '<td>' . $stud_arr[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        ?>

    </table>

</body>

</html>