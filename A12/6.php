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
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $con = mysqli_connect("localhost","root","","feed");
            $name = $_POST["name"];
            $email = $_POST["email"];
            $msg = $_POST["mesg"];

            if(preg_match("/^[a-zA-Z ]+$/",$name)){
                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $sql = "INSERT INTO `data` VALUES ('$name', '$email', '$msg')";
                    $res = mysqli_query($con,$sql);
                    echo "Data Inserted successfully";
                }
                else{
                    $err = "Invalid email format";
                }
            }
            else{
                $err = "Name should be characters only";  

            }
            
        }
    ?>
    <h3>Contact Us</h3>
    <form method="post">
        Message:<br>
        <textarea name="mesg" cols="66" placeholder="Enter your feedback"></textarea><br>
        Your Name:
        <input type="text" name="name">
        Your Email:
        <input type="email" name="email"><br>

        <button type="submit" name="submit">submit</button> <span class="error" style="color: red;">*<?php echo $err;?></span>
    </form>
</body>
</html>