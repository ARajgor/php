<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
</head>
<body>
    <?php
        session_start();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['name'];
            echo $name;
            if(isset($_SESSION['logged_in'])){
                echo "<br>i'm form session".$_SESSION['user_name'];

            }
        }
    ?>
</body>
</html> 