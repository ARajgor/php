<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Task in php</title>
</head>

<body>
    <?php
    $count = 0;
    $err = "";
    session_start();

    $server_name = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'test';
    $connect = mysqli_connect($server_name, $user, $pass, $db_name);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["create"])) {
            $create = "INSERT INTO `admin` VALUES ('Ayush','123')"; #create
            $res = mysqli_query($connect, $create);
        }
        if (isset($_POST["read"])) {
            $read = "SELECT * FROM `admin`";  # Read
            $result = mysqli_query($connect, $read);

            $row = mysqli_fetch_row($result); # return row in assoc array numeric index
            print_r($row); # $row[0]
            echo "<br>";

            $assoc = mysqli_fetch_assoc($result); # return row in assoc array string(col name) index
            print_r($assoc); # array["admin"]
            echo "<br>";

            $array = mysqli_fetch_array($result); # return assoc array with both(numeric and string) index
            print_r($array);  # $array[0], array["admin"] both valid
            echo "<br>";
        }
        if (isset($_POST["update"])) {
            $update = "UPDATE `admin` SET password='ar' WHERE admin='Ayush'";
            $result = mysqli_query($connect, $update);
        }

        if (isset($_POST["delete"])) {
            $delete = "DELETE FROM `admin` WHERE admin=`admin`";
            $result = mysqli_query($connect, $delete);
        }

        if (isset($_POST["session"])) {
            $_SESSION['user_name'] = $_POST["name"];
            header("location: submit.php");
        }
        if (isset($_POST["cookie"])) {
            $cookie_name = "name";
            $cookie_value = $_POST["name"];
            setcookie($cookie_name, $cookie_value, time() + 3600);
        }
        if (isset($_POST["files"])) {
            if (file_exists("count.txt")) {
                $count = (int)file_get_contents('count.txt');
                $count++;
                setcookie("Cookie", $count, time() + 3600);
                file_put_contents('count.txt', $count);
                echo "you have visited this page " . $count . " times";
            } else {
                echo "file created";
                touch("count.txt");
                $fp = fopen('count.txt', 'w');
                fwrite($fp,"0");
            }
        }
        if ($_FILES['file']['error'] != UPLOAD_ERR_NO_FILE) {
            $file =  $_FILES['file'];
            $name = $file['name'];
            $tmp = $file['tmp_name'];
            $size = $file['size'];
            $type = $file['type'];
            $e = explode('.', $name);
            $ext = strtolower(end($e));

            $allow = array('pdf', 'jpg', 'png');

            if (in_array($ext, $allow)) {
                if ($size < 1000000) {
                    $new = uniqid() . "." . $name;
                    $des = "C:/xampp/htdocs/project/A12/upload/" . $new;
                    move_uploaded_file($tmp, $des);
                    echo "File upload successfully";
                } else {
                    $err = "Your size exceed 1MB";
                }
            } else {
                $err = "Only pdf,jpg and png allowed";
            }
        }
    }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="user name"><br><br>
        
        <button type='submit' name="create">Create</button>
        <button type='submit' name="read">Read</button>
        <button type='submit' name="update">Update</button>
        <button type='submit' name="delete">Delete</button><br><br>

        <button type='submit' name="session">Session</button>
        <button type='submit' name="cookie">Cookie</button>
        <button type='submit' name="files">count(ck+file)</button><br><br>

        <input type="file" name="file">
        <span class="error" style="color: red;"><?php echo $err; ?></span>
        <button type="submit" name="submit">submit</button>

    </form>
</body>

</html>