<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom</title>
</head>
<body>
    
    <?php
    session_start();
    if(isset($_SESSION["name"])){
    echo "<h1> Welcome ".$_SESSION["name"]."</h1>";
    }
    //echo "<h1> Welcome User";
    ?>
</body>
</html>