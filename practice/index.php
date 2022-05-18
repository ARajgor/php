<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch from DB</title>
</head>
<body>
    <?php
        $server_name = 'localhost';
        $user = 'root';
        $pass = '';
        $db_name = 'test';
        $connect = mysqli_connect($server_name,$user,$pass,$db_name);

        $sql = "SELECT `admin` FROM `admin`";
        $result = mysqli_query($connect,$sql);
        session_start();

        while ($r = mysqli_fetch_assoc($result)){
            $name = $r['admin'];
            echo $name.'<br>';
            
        }
    
            $_SESSION['logged_in'] = "true";
            $_SESSION['user_name'] = $name;
            $cookie_name = "name";
            $cookie_value = "Ayush";

    ?>
    <form action="submit.php" method="POST">
        <input type="text" name="name" placeholder="user name">
        <button type='submit' >submit</button>

    </form>
</body>
</html>