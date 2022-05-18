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
    $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    <form method="post" enctype="multipart/form-data">

        <input type="file" name="file"><br>
        <span class="error" style="color: red;">*<?php echo $err ;?></span>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>