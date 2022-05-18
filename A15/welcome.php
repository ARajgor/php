<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    $_SESSION['count_wc'] = 0;
    session_start();
    echo "Welcome ".$_SESSION["user"]."<br><hr><br>";

    
    if (isset($_SESSION['count_wc'])) {
        echo "welcome page reload count: {$_SESSION['count_wc']}\n";
        $_SESSION['count_wc'] = $_SESSION['count_wc'] + 1;
    } else {
        $_SESSION['count_wc'] = 0;
    }
    $_SESSION['totle'] = $_SESSION['count_login'] + $_SESSION['count_wc'];
    echo "<br>totle page reload count: " . $_SESSION['totle'];
    
    ?>
    
</body>
</html>
