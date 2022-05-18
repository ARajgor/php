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
        echo "<br>i'm form session name: " . $_SESSION['user_name'];
    ?>
</body>

</html>